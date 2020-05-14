<?php

namespace Mtrajano\LaravelSwagger\Responses;

class BodyResponseGenerator
{
    private $rules;

    public function __construct($rules)
    {
        $this->rules = $rules;
    }

    public function getReponse()
    {
        return [
            '200' => [
                'description' => 'OK',
                'schema' => $this->rules,
            ]
        ];
    }
}
