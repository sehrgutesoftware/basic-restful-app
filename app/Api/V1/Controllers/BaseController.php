<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\ModelMapping;
use SehrGut\Laravel5_Api\Controller;
use SehrGut\Laravel5_Api\Plugins\RelationSplitter;

class BaseController extends Controller
{
    /**
     * Plugins that should be loaded in this controller.
     *
     * @var array
     */
    protected $plugins = [RelationSplitter::class];

    /** {@inheritdoc} */
    protected $model_mapping_class = ModelMapping::class;
}
