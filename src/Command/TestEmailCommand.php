<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

#[AsCommand(name: 'app:test-email')]
class TestEmailCommand extends Command
{
    private MailerInterface $mailer;

    public function __construct(MailerInterface $mailer)
    {
        parent::__construct();
        $this->mailer = $mailer;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $email = (new Email())
            ->from('bousliminour70@gmail.com')
            ->to('bouslimi.nourelhouda@esprit.tn') // Remplacez par une adresse email de test
            ->subject('Test Email')
            ->text('This is a test email.');

        try {
            $this->mailer->send($email);
            $output->writeln('Email sent successfully.');
        } catch (\Exception $e) {
            $output->writeln('Failed to send email: ' . $e->getMessage());
        }

        return Command::SUCCESS;
    }
}