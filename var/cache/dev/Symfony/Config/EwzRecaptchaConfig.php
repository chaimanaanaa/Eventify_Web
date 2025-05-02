<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'EwzRecaptcha'.\DIRECTORY_SEPARATOR.'HttpProxyConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'EwzRecaptcha'.\DIRECTORY_SEPARATOR.'ServiceDefinitionConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class EwzRecaptchaConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $publicKey;
    private $privateKey;
    private $enabled;
    private $verifyHost;
    private $ajax;
    private $localeKey;
    private $apiHost;
    private $localeFromRequest;
    private $version;
    private $hideBadge;
    private $scoreThreshold;
    private $timeout;
    private $trustedRoles;
    private $httpProxy;
    private $serviceDefinition;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function publicKey($value): static
    {
        $this->_usedProperties['publicKey'] = true;
        $this->publicKey = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function privateKey($value): static
    {
        $this->_usedProperties['privateKey'] = true;
        $this->privateKey = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function verifyHost($value): static
    {
        $this->_usedProperties['verifyHost'] = true;
        $this->verifyHost = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function ajax($value): static
    {
        $this->_usedProperties['ajax'] = true;
        $this->ajax = $value;

        return $this;
    }

    /**
     * @default '%kernel.default_locale%'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function localeKey($value): static
    {
        $this->_usedProperties['localeKey'] = true;
        $this->localeKey = $value;

        return $this;
    }

    /**
     * @default 'www.google.com'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function apiHost($value): static
    {
        $this->_usedProperties['apiHost'] = true;
        $this->apiHost = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function localeFromRequest($value): static
    {
        $this->_usedProperties['localeFromRequest'] = true;
        $this->localeFromRequest = $value;

        return $this;
    }

    /**
     * @default 2
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function version($value): static
    {
        $this->_usedProperties['version'] = true;
        $this->version = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function hideBadge($value): static
    {
        $this->_usedProperties['hideBadge'] = true;
        $this->hideBadge = $value;

        return $this;
    }

    /**
     * @default 0.5
     * @param ParamConfigurator|float $value
     * @return $this
     */
    public function scoreThreshold($value): static
    {
        $this->_usedProperties['scoreThreshold'] = true;
        $this->scoreThreshold = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function timeout($value): static
    {
        $this->_usedProperties['timeout'] = true;
        $this->timeout = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function trustedRoles(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['trustedRoles'] = true;
        $this->trustedRoles = $value;

        return $this;
    }

    /**
     * @default {"host":null,"port":null,"auth":null}
    */
    public function httpProxy(array $value = []): \Symfony\Config\EwzRecaptcha\HttpProxyConfig
    {
        if (null === $this->httpProxy) {
            $this->_usedProperties['httpProxy'] = true;
            $this->httpProxy = new \Symfony\Config\EwzRecaptcha\HttpProxyConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "httpProxy()" has already been initialized. You cannot pass values the second time you call httpProxy().');
        }

        return $this->httpProxy;
    }

    public function serviceDefinition(array $value = []): \Symfony\Config\EwzRecaptcha\ServiceDefinitionConfig
    {
        $this->_usedProperties['serviceDefinition'] = true;

        return $this->serviceDefinition[] = new \Symfony\Config\EwzRecaptcha\ServiceDefinitionConfig($value);
    }

    public function getExtensionAlias(): string
    {
        return 'ewz_recaptcha';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('public_key', $value)) {
            $this->_usedProperties['publicKey'] = true;
            $this->publicKey = $value['public_key'];
            unset($value['public_key']);
        }

        if (array_key_exists('private_key', $value)) {
            $this->_usedProperties['privateKey'] = true;
            $this->privateKey = $value['private_key'];
            unset($value['private_key']);
        }

        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('verify_host', $value)) {
            $this->_usedProperties['verifyHost'] = true;
            $this->verifyHost = $value['verify_host'];
            unset($value['verify_host']);
        }

        if (array_key_exists('ajax', $value)) {
            $this->_usedProperties['ajax'] = true;
            $this->ajax = $value['ajax'];
            unset($value['ajax']);
        }

        if (array_key_exists('locale_key', $value)) {
            $this->_usedProperties['localeKey'] = true;
            $this->localeKey = $value['locale_key'];
            unset($value['locale_key']);
        }

        if (array_key_exists('api_host', $value)) {
            $this->_usedProperties['apiHost'] = true;
            $this->apiHost = $value['api_host'];
            unset($value['api_host']);
        }

        if (array_key_exists('locale_from_request', $value)) {
            $this->_usedProperties['localeFromRequest'] = true;
            $this->localeFromRequest = $value['locale_from_request'];
            unset($value['locale_from_request']);
        }

        if (array_key_exists('version', $value)) {
            $this->_usedProperties['version'] = true;
            $this->version = $value['version'];
            unset($value['version']);
        }

        if (array_key_exists('hide_badge', $value)) {
            $this->_usedProperties['hideBadge'] = true;
            $this->hideBadge = $value['hide_badge'];
            unset($value['hide_badge']);
        }

        if (array_key_exists('score_threshold', $value)) {
            $this->_usedProperties['scoreThreshold'] = true;
            $this->scoreThreshold = $value['score_threshold'];
            unset($value['score_threshold']);
        }

        if (array_key_exists('timeout', $value)) {
            $this->_usedProperties['timeout'] = true;
            $this->timeout = $value['timeout'];
            unset($value['timeout']);
        }

        if (array_key_exists('trusted_roles', $value)) {
            $this->_usedProperties['trustedRoles'] = true;
            $this->trustedRoles = $value['trusted_roles'];
            unset($value['trusted_roles']);
        }

        if (array_key_exists('http_proxy', $value)) {
            $this->_usedProperties['httpProxy'] = true;
            $this->httpProxy = new \Symfony\Config\EwzRecaptcha\HttpProxyConfig($value['http_proxy']);
            unset($value['http_proxy']);
        }

        if (array_key_exists('service_definition', $value)) {
            $this->_usedProperties['serviceDefinition'] = true;
            $this->serviceDefinition = array_map(fn ($v) => new \Symfony\Config\EwzRecaptcha\ServiceDefinitionConfig($v), $value['service_definition']);
            unset($value['service_definition']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['publicKey'])) {
            $output['public_key'] = $this->publicKey;
        }
        if (isset($this->_usedProperties['privateKey'])) {
            $output['private_key'] = $this->privateKey;
        }
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['verifyHost'])) {
            $output['verify_host'] = $this->verifyHost;
        }
        if (isset($this->_usedProperties['ajax'])) {
            $output['ajax'] = $this->ajax;
        }
        if (isset($this->_usedProperties['localeKey'])) {
            $output['locale_key'] = $this->localeKey;
        }
        if (isset($this->_usedProperties['apiHost'])) {
            $output['api_host'] = $this->apiHost;
        }
        if (isset($this->_usedProperties['localeFromRequest'])) {
            $output['locale_from_request'] = $this->localeFromRequest;
        }
        if (isset($this->_usedProperties['version'])) {
            $output['version'] = $this->version;
        }
        if (isset($this->_usedProperties['hideBadge'])) {
            $output['hide_badge'] = $this->hideBadge;
        }
        if (isset($this->_usedProperties['scoreThreshold'])) {
            $output['score_threshold'] = $this->scoreThreshold;
        }
        if (isset($this->_usedProperties['timeout'])) {
            $output['timeout'] = $this->timeout;
        }
        if (isset($this->_usedProperties['trustedRoles'])) {
            $output['trusted_roles'] = $this->trustedRoles;
        }
        if (isset($this->_usedProperties['httpProxy'])) {
            $output['http_proxy'] = $this->httpProxy->toArray();
        }
        if (isset($this->_usedProperties['serviceDefinition'])) {
            $output['service_definition'] = array_map(fn ($v) => $v->toArray(), $this->serviceDefinition);
        }

        return $output;
    }

}
