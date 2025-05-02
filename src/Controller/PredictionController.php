<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Organisateur;
use Phpml\Math\Statistic\Mean;
use Phpml\Math\Statistic\StandardDeviation;

#[Route('/api', name: 'api_')]
class PredictionController extends AbstractController
{
    #[Route('/predict-offer', name: 'predict_offer', methods: ['POST'], format: 'json')]
    public function predictOffer(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        try {
            // Validate request data
            if (empty($request->getContent())) {
                throw new \Exception('No data received');
            }

            $data = json_decode($request->getContent(), true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception('Invalid JSON format');
            }

            // Validate required fields
            $requiredFields = ['type_evenement', 'budget'];
            foreach ($requiredFields as $field) {
                if (!isset($data[$field]) || empty($data[$field])) {
                    throw new \Exception("Missing required field: {$field}");
                }
            }

            // Validate budget
            $budget = floatval($data['budget']);
            if ($budget <= 0) {
                throw new \Exception('Budget must be greater than 0');
            }

            // Get all organizers
            $organizers = $entityManager->getRepository(Organisateur::class)->findAll();
            if (empty($organizers)) {
                throw new \Exception('No organizers available for prediction');
            }

            // Count organizers that match all conditions
            $matchingOrganizers = 0;
            $totalOrganizers = count($organizers);
            $matchingScores = [];

            foreach ($organizers as $organizer) {
                // Check all three conditions
                $budgetOk = $budget >= $organizer->getSalaire();
                $specialtyOk = $organizer->getSpecialite() === $data['type_evenement'];
                $availabilityOk = $organizer->getStatut() === 'Available';

                // Calculate matching score
                $score = 0;
                if ($budgetOk) $score += 1;
                if ($specialtyOk) $score += 1;
                if ($availabilityOk) $score += 1;
                $matchingScores[] = $score;

                // If all conditions are met, increment counter
                if ($budgetOk && $specialtyOk && $availabilityOk) {
                    $matchingOrganizers++;
                }
            }

            // Calculate probability using statistical methods
            $meanScore = Mean::arithmetic($matchingScores);
            $stdDev = StandardDeviation::population($matchingScores);
            
            // Base probability calculation
            $probability = 0;
            if ($matchingOrganizers > 0) {
                // If at least one organizer matches all conditions
                // Base high probability (70%) plus additional percentage based on number of matching organizers
                $probability = 70 + min(($matchingOrganizers / $totalOrganizers) * 30, 30);
            } else {
                // If no organizer matches all conditions
                // Calculate partial matches for a low probability
                $partialMatches = array_sum($matchingScores);
                $maxPossibleMatches = $totalOrganizers * 3;
                $probability = ($partialMatches / $maxPossibleMatches) * 35; // Max 35% for partial matches
            }

            // Adjust probability based on statistical measures
            $probability = $probability * (1 + ($meanScore / 3)) * (1 - ($stdDev / 3));
            
            // Ensure probability is between 0 and 100
            $probability = min(max($probability, 0), 100);

            return new JsonResponse([
                'success' => true,
                'probability' => round($probability, 1),
                'matching_organizers' => $matchingOrganizers,
                'total_organizers' => $totalOrganizers
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'error' => $e->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }
    }
} 