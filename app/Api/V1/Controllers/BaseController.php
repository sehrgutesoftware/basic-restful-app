<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\ModelMapping;
use SehrGut\Laravel5_Api\Controller;

class BaseController extends Controller
{
    /** {@inheritdoc} */
    protected $plugins = [];

    /** {@inheritdoc} */
    protected $model_mapping_class = ModelMapping::class;
}
