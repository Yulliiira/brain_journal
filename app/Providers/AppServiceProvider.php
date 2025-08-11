<?php

namespace App\Providers;

use App\Domain\Note\Contracts\CategoryRepositoryInterface;
use App\Domain\Note\Contracts\CategoryServiceInterface;
use App\Repositories\CategoryRepository;
use App\Services\CategoryService;
use Illuminate\Support\ServiceProvider;

use App\Domain\Note\Contracts\NoteRepositoryInterface;
use App\Domain\Note\Contracts\NoteServiceInterface;
use App\Repositories\NoteRepository;
use App\Services\NoteService;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(NoteRepositoryInterface::class, NoteRepository::class);
        $this->app->bind(NoteServiceInterface::class, NoteService::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(CategoryServiceInterface::class, CategoryService::class);
    }

    public function boot(): void
    {
        //
    }
}
