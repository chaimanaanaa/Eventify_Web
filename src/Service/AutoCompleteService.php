<?php

// src/Service/AutoCompleteService.php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class AutoCompleteService
{
    private $httpClient;
    private $apiKey = 'ZKuvfIDuI1r8wDjMuGqMILBlh7MEF15ooGFYZqTf';

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function getSuggestions(string $inputText): array
    {
        try {
            $response = $this->httpClient->request('POST', 'https://api.cohere.ai/generate', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type' => 'application/json',
                    'Cohere-Version' => '2022-12-06',
                ],
                'json' => [
                    'prompt' => "Complète ce commentaire : \"$inputText\" avec 3 suggestions de mots naturels.",
                    'max_tokens' => 15,
                    'temperature' => 0.7,
                    'stop_sequences' => ["\n"]
                ]
            ]);

            $data = $response->toArray();

            // Extraire les mots depuis le texte généré
            $text = trim($data['generations'][0]['text'] ?? '');
            $suggestions = array_filter(array_map('trim', explode(' ', $text)));

            return array_slice($suggestions, 0, 3);

        } catch (\Exception $e) {
            return [];
        }
    }
}


