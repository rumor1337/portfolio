<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\Commit;

class CommitService
{
    public function getCommits(): void
    {
        $allRepos = Http::acceptJson()
            ->withHeaders([
                'X-GitHub-Api-Version' => '2026-03-10',
            ])
            ->get('https://api.github.com/users/rumor1337/repos')
            ->throw()
            ->json();

        foreach($allRepos as $repo) {
            $repoName = $repo['name'];

            $commits = Http::acceptJson()
                ->withHeaders([
                    'X-GitHub-Api-Version' => '2026-03-10',
                ])
                ->get("https://api.github.com/repos/rumor1337/{$repoName}/commits")
                ->throw()
                ->json();

            foreach($commits as $commit) {
                Commit::create([
                    'project' => $repoName,
                    'title' => $commit['commit']['message'],
                    'commit' => $commit['sha'],
                ]);
            }

        }
    }
}
