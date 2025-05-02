<?php

namespace ContainerGYcYTMo;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'google'.\DIRECTORY_SEPARATOR.'recaptcha'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ReCaptcha'.\DIRECTORY_SEPARATOR.'ReCaptcha.php';

class ReCaptchaGhost91860bb extends \ReCaptcha\ReCaptcha implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'action' => [parent::class, 'action', null],
        "\0".parent::class."\0".'apkPackageName' => [parent::class, 'apkPackageName', null],
        "\0".parent::class."\0".'hostname' => [parent::class, 'hostname', null],
        "\0".parent::class."\0".'requestMethod' => [parent::class, 'requestMethod', null],
        "\0".parent::class."\0".'secret' => [parent::class, 'secret', null],
        "\0".parent::class."\0".'threshold' => [parent::class, 'threshold', null],
        "\0".parent::class."\0".'timeoutSeconds' => [parent::class, 'timeoutSeconds', null],
        'action' => [parent::class, 'action', null],
        'apkPackageName' => [parent::class, 'apkPackageName', null],
        'hostname' => [parent::class, 'hostname', null],
        'requestMethod' => [parent::class, 'requestMethod', null],
        'secret' => [parent::class, 'secret', null],
        'threshold' => [parent::class, 'threshold', null],
        'timeoutSeconds' => [parent::class, 'timeoutSeconds', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ReCaptchaGhost91860bb', false)) {
    \class_alias(__NAMESPACE__.'\\ReCaptchaGhost91860bb', 'ReCaptchaGhost91860bb', false);
}
