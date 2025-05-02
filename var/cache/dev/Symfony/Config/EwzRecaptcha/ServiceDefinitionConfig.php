<?php

namespace Symfony\Config\EwzRecaptcha;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ServiceDefinitionConfig'.\DIRECTORY_SEPARATOR.'OptionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ServiceDefinitionConfig 
{
    private $serviceName;
    private $options;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function serviceName($value): static
    {
        $this->_usedProperties['serviceName'] = true;
        $this->serviceName = $value;

        return $this;
    }

    public function options(array $value = []): \Symfony\Config\EwzRecaptcha\ServiceDefinitionConfig\OptionsConfig
    {
        if (null === $this->options) {
            $this->_usedProperties['options'] = true;
            $this->options = new \Symfony\Config\EwzRecaptcha\ServiceDefinitionConfig\OptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "options()" has already been initialized. You cannot pass values the second time you call options().');
        }

        return $this->options;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('service_name', $value)) {
            $this->_usedProperties['serviceName'] = true;
            $this->serviceName = $value['service_name'];
            unset($value['service_name']);
        }

        if (array_key_exists('options', $value)) {
            $this->_usedProperties['options'] = true;
            $this->options = new \Symfony\Config\EwzRecaptcha\ServiceDefinitionConfig\OptionsConfig($value['options']);
            unset($value['options']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['serviceName'])) {
            $output['service_name'] = $this->serviceName;
        }
        if (isset($this->_usedProperties['options'])) {
            $output['options'] = $this->options->toArray();
        }

        return $output;
    }

}
