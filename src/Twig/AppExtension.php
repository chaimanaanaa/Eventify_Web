<?php
namespace App\Twig;

use Symfony\Component\Security\Core\Security;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    private Security $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('get_user', [$this, 'getUser']),
        ];
    }

    public function getUser()
    {
        // Retourne l'utilisateur connecté ou null s'il n'est pas connecté
        return $this->security->getUser();
    }
}