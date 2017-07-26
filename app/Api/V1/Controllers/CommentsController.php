<?php

namespace App\Api\V1\Controllers;

use App\Models\Comment;

class CommentsController extends BaseController
{
    /**
     * The model that is exposed through this controller.
     *
     * @var string
     */
    protected $model = Comment::class;
}
