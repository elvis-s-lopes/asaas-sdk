<?php

namespace Lopes\Test;

use Lopes\Asaas\Facade\AsaasFacade;
use Lopes\Asaas\ServiceProviders\ServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * @param \Illuminate\Foundation\Application $app
     * @return string[]
     */
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return string[]
     */
    protected function getPackageAliases($app)
    {
        return [
            'asaas' => AsaasFacade::class,
        ];
    }
}
