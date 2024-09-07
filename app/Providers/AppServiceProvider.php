<?php

namespace App\Providers;

use App\Domain\Repositories\DepositoBancarioRepositoryInterface;
use App\Infrastructure\Persistence\DepositoBancarioRepository;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(DepositoBancarioRepositoryInterface::class, DepositoBancarioRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
