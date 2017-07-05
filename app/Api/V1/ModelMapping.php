<?php

namespace App\Api\V1;

use SehrGut\Laravel5_Api\ModelMapping as BaseModelMapping;

use App\Models\Article;
use App\Api\V1\Transformers\ArticleTransformer;
use App\Api\V1\Validators\ArticleValidator;

class ModelMapping extends BaseModelMapping
{
    protected $validators = [
        Article::class => ArticleValidator::class,
    ];

    protected $transformers = [
        Article::class => ArticleTransformer::class,
    ];
}
