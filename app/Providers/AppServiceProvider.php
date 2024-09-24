<?php

namespace App\Providers;

use App\Services\CommandService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use RobersonFaria\DatabaseSchedule\Http\Services\CommandService as OriginCommandService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(OriginCommandService::class, CommandService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('viewDatabaseSchedule', function ($user) {
            return Auth::check();
        });
    }
}
