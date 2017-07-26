<?php

namespace App\Api\V1\Controllers;

use App\Models\Comment;

class CommentsController extends BaseController
{
    protected $model = Comment::class;
}
