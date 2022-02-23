<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        'Test',
        'Test',
        'Test',
        'Test',
        'Test'
    ];

    protected $repositoryPath = "App/Repositories";
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        foreach ($this->repositories as $repository) {
            app()->singleton(
                "{$this->repositoryPath}/{$repository}Repository.php",
                "{$this->repositoryPath}/{$repository}RepositoryInterface.php"
            );
        }
    }
}
