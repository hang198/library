<?php

namespace App\Providers;

use App\Http\Controllers\RoleConstant;
use App\Repositories\BookRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\CustomerRepository;
use App\Repositories\LibraryRepository;
use App\Repositories\UserRepository;
use App\Services\BookService;
use App\Services\CategoryService;
use App\Services\CustomerService;
use App\Services\LibraryService;
use App\Services\UserService;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            UserRepository::class
        );
        $this->app->singleton(
            UserService::class
        );
        $this->app->singleton(
            BookRepository::class
        );
        $this->app->singleton(
            BookService::class
        );
        $this->app->singleton(
            CategoryRepository::class
        );
        $this->app->singleton(
            CategoryService::class
        );
        $this->app->singleton(
            LibraryRepository::class
        );
        $this->app->singleton(
            LibraryService::class
        );
        $this->app->singleton(
            CustomerRepository::class
        );
        $this->app->singleton(
            CustomerService::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('crud-users', function ($user) {
            //logic
            if ($user->role == RoleConstant::ADMIN) {
                return true;
            }
            return false;
        });
        Gate::define('crud-categories', function ($user) {
            //logic
            if ($user->role == RoleConstant::ADMIN) {
                return true;
            }
            return false;
        });
        Gate::define('crud-libraries', function ($user) {
            //logic
            if ($user->role == RoleConstant::ADMIN) {
                return true;
            }
            return false;
        });
        Gate::define('crud-books', function ($user) {
            //logic
            if ($user->role == RoleConstant::MANAGEMENT) {
                return true;
            }
            return false;
        });
        Gate::define('crud-customers', function ($user) {
            //logic
            if ($user->role == RoleConstant::MANAGEMENT) {
                return true;
            }
            return false;
        });
        Gate::define('manage-borrows',function ($borrow) {
            if ($borrow->role == RoleConstant::MANAGEMENT) {
                return true;
            }
            return false;
        });

    }
}
