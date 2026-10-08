<?php

namespace Tests\Feature;

use App\Services\CommitService;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class CommitServiceTest extends TestCase
{
    public function test_it_fetches_commits_from_the_github_api(): void
    {
        Http::fake([
            'api.github.com/repos/rumor1337/genericproductscraper/commits' => Http::response([
                ['sha' => 'abc123'],
            ]),
        ]);

        $commits = app(CommitService::class)->getCommits();

        $this->assertSame([['sha' => 'abc123']], $commits);
        Http::assertSent(function ($request): bool {
            return $request->url() === 'https://api.github.com/repos/rumor1337/genericproductscraper/commits'
                && $request->header('Accept')[0] === 'application/json'
                && $request->header('X-GitHub-Api-Version')[0] === '2022-11-28';
        });
    }
}
