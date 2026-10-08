<?php

use App\Services\CommitService;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('commits:sync', function (CommitService $commitService) {
    $count = $commitService->sync();

    $this->info("Synced {$count} commits.");
})->purpose('Sync commits from GitHub');
