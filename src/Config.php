<?php

namespace PaulhenriL\PhpCsConfig;

use PhpCsFixer\ConfigInterface;

class Config extends \PhpCsFixer\Config
{
    public const RULES = [
        '@paulhenri-l' => [
            '@PSR1' => true,
            '@PSR2' => true,
            '@PSR12' => true,
        ]
    ];

    public function __construct(string $name = 'paulhenri-l')
    {
        parent::__construct($name);
    }

    public function setRules(array $rules): ConfigInterface
    {
        foreach ($rules as $name => $rule) {
            if (!array_key_exists($name, static::RULES)) {
                continue;
            }

            if (!$rule) {
                continue;
            }

            unset($rules[$name]);
            $rules = array_merge($rules, static::RULES[$name]);
        }

        return parent::setRules($rules);
    }
}
