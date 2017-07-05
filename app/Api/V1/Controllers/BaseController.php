<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\ModelMapping;
use SehrGut\Laravel5_Api\Controller;

class BaseController extends Controller
{
    /**
     * The attributes on the model that are searchable through the SearchFilter plugin.
     *
     * @var array
     */
    protected $searchable = [];

    /** {@inheritdoc} */
    protected $plugins = [];

    /** {@inheritdoc} */
    protected $model_mapping_class = ModelMapping::class;
}
