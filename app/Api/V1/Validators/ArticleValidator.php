<?php

namespace App\Api\V1\Validators;

use SehrGut\Laravel5_Api\Validator;

class ArticleValidator extends Validator
{
    protected static $rules = [
        'name' => 'required|string|min:2|max:255',
        'body' => 'required|string|max:65535',
    ];
}
