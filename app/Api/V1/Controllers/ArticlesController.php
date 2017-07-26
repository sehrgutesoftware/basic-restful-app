<?php

namespace App\Api\V1\Controllers;

use App\Models\Article;

class ArticlesController extends BaseController
{
    /**
     * The model that is exposed through this controller.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * The relations that should be eager-loaded and contained in the response.
     *
     * @var array
     */
    protected $relations = ['comments'];
}
