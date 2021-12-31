<?php

namespace App\Providers;


use App\Repositories\Admin\Contracts\AdminMenuInterface;

use App\Repositories\Admin\Contracts\AuthInterface;

use App\Repositories\Admin\Eloquent\AdminMenuRepository;

use Illuminate\Support\ServiceProvider;

class AdminRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //

        $this->app->singleton(AdminMenuInterface::class,AdminMenuRepository::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
