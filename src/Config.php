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
        $finalRules = [];

        foreach ($rules as $name => $rule) {
            if (!array_key_exists($name, static::RULES)) {
                continue;
            }

            if (!$rule) {
                continue;
            }

            unset($rules[$name]);
            $finalRules = array_merge($finalRules, static::RULES[$name]);
        }

        $finalRules = array_merge($finalRules, $rules);

        return parent::setRules($finalRules);
    }
}
