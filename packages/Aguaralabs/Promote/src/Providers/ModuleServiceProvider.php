<?php

namespace Aguaralabs\Promote\Providers;

use Aguaralabs\Promote\Models\Promotion;
use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        Promotion::class
    ];
}
