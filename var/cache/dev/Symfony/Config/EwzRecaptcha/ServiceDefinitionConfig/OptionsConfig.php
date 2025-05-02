<?php

namespace Symfony\Config\EwzRecaptcha\ServiceDefinitionConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OptionsConfig 
{
    private $actionName;
    private $scriptNonceCsp;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function actionName($value): static
    {
        $this->_usedProperties['actionName'] = true;
        $this->actionName = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function scriptNonceCsp($value): static
    {
        $this->_usedProperties['scriptNonceCsp'] = true;
        $this->scriptNonceCsp = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('action_name', $value)) {
            $this->_usedProperties['actionName'] = true;
            $this->actionName = $value['action_name'];
            unset($value['action_name']);
        }

        if (array_key_exists('script_nonce_csp', $value)) {
            $this->_usedProperties['scriptNonceCsp'] = true;
            $this->scriptNonceCsp = $value['script_nonce_csp'];
            unset($value['script_nonce_csp']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['actionName'])) {
            $output['action_name'] = $this->actionName;
        }
        if (isset($this->_usedProperties['scriptNonceCsp'])) {
            $output['script_nonce_csp'] = $this->scriptNonceCsp;
        }

        return $output;
    }

}
