<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class CountValidator extends AbstractValidator
{

    protected string $message = 'Field :field короткая';

    public function rule(): bool
    {
        return (bool)!(strlen ($this->value) < 3);
    }
}