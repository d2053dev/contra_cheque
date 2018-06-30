<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class ClienteValidator.
 *
 * @package namespace App\Validators;
 */
class ClienteValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
          'name'          => 'required',
          'cnpj'          => 'required',
          'funcionaries'  => 'required',
        ],
        ValidatorInterface::RULE_UPDATE => [],
    ];
}
