<?php

// src/Service/PythonTranslator.php
namespace App\Service;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PythonTranslator extends AbstractController
{
    private $pythonPath;
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
        $this->pythonPath = 'python3'; // Version Windows
    }

    public function translate(string $text, string $targetLang): string
    {
        $projectDir = $this->getParameter('kernel.project_dir');
        $scriptPath = $projectDir.'public/python/python.py';
        
        
        if (!file_exists($scriptPath)) {
            $this->logger->error('Script Python introuvable : '.$scriptPath);
            return $text;
        }

        try {
            $process = new Process([
                $this->pythonPath,
                $scriptPath,
                $text,  // Texte directement sans encodage
                $targetLang
            ]);
            
            $process->setTimeout(30);
            $process->run();

            if (!$process->isSuccessful()) {
                throw new ProcessFailedException($process);
            }
            
            $translated = trim($process->getOutput());
            
            return $translated ?: $text;
            
        } catch (\Exception $e) {
            $this->logger->error('Échec traduction : '.$e->getMessage());
            return $text;
        }
    }
}