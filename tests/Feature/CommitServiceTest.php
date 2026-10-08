<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class CommitServiceTest extends TestCase
{
    public function test_it_syncs_commits_from_the_github_api(): void
    {
        Http::fake([
            'api.github.com/users/rumor1337/repos' => Http::response([
                ['name' => 'genericproductscraper'],
            ]),
            'api.github.com/repos/rumor1337/genericproductscraper/commits' => Http::response([
                ['sha' => 'abc123', 'commit' => ['message' => 'Initial commit']],
            ]),
        ]);

        $response = $this->post('/commits/sync');

        $response->assertRedirect('/');
        $this->assertDatabaseHas('commits', [
            'project' => 'genericproductscraper',
            'commit' => 'abc123',
            'title' => 'Initial commit',
        ]);

        Http::assertSentCount(2);
        Http::assertSent(fn ($request): bool => $request->header('X-GitHub-Api-Version')[0] === '2022-11-28');
    }
}
