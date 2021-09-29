<?php

namespace PaulhenriL\PhpCsConfig;

use PhpCsFixer\ConfigInterface;

class Config extends \PhpCsFixer\Config
{
    public const RULES = [
        '@paulhenri-l' => [
            //
        ]
    ];

    public function __construct(string $name = 'paulhenri-l')
    {
        parent::__construct($name);
    }

    public function setRules(array $rules): ConfigInterface
    {
        foreach ($rules as $name => $rule) {
            if ($rule === true && !array_key_exists($name, static::RULES)) {
                continue;
            }

            $rules[$name] = static::RULES[$name];
        }

        return parent::setRules($rules);
    }
}
