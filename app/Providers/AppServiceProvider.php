<?php

namespace App\Providers;

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
    }

    public function boot(): void
    {
        //
    }
}
