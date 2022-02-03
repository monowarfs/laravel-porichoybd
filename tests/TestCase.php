<?php

namespace Monowarfs\PorichoyBD\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Monowarfs\PorichoyBD\PorichoyBDServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Monowarfs\\PorichoyBD\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            PorichoyBDServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_porichoybd_table.php.stub';
        $migration->up();
        */
    }
}
