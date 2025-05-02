<?php
namespace App\EventSubscriber;

use App\Entity\User;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpFoundation\RequestStack;
use Doctrine\ORM\EntityManagerInterface;
use Twig\Environment;

class UserSubscriber implements EventSubscriberInterface
{
    private RequestStack $requestStack;
    private EntityManagerInterface $entityManager;
    private Environment $twig;

    public function __construct(RequestStack $requestStack, EntityManagerInterface $entityManager, Environment $twig)
    {
        $this->requestStack = $requestStack;
        $this->entityManager = $entityManager;
        $this->twig = $twig;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
        ];
    }

    public function onKernelController(ControllerEvent $event): void
    {
        $session = $this->requestStack->getSession();

        // Récupérer l'utilisateur connecté depuis la session
        $userId = $session->get('user_id');
        if ($userId) {
            $user = $this->entityManager->getRepository(User::class)->find($userId);

            // Ajouter l'utilisateur comme variable globale Twig
            $this->twig->addGlobal('user', $user);
        }
    }
}