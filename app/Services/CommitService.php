<?php

namespace App\Services;

use App\Models\Commit;
use Illuminate\Support\Facades\Http;

class CommitService
{
    public function sync(): int
    {
        $commits = $this->getCommits();

        Commit::upsert($commits, ['project', 'commit'], ['title']);

        return count($commits);
    }

    public function getCommits(): array
    {
        $github = Http::acceptJson()->withHeaders([
            'X-GitHub-Api-Version' => '2022-11-28',
        ]);

        $allRepos = $github
            ->get('https://api.github.com/users/rumor1337/repos')
            ->throw()
            ->json();

        $allCommits = [];

        foreach ($allRepos as $repo) {
            $repoName = $repo['name'];

            $commits = $github
                ->get("https://api.github.com/repos/rumor1337/{$repoName}/commits")
                ->throw()
                ->json();

            foreach ($commits as $commit) {
                $allCommits[] = [
                    'project' => $repoName,
                    'title' => $commit['commit']['message'],
                    'commit' => $commit['sha'],
                ];
            }
        }

        return $allCommits;
    }
}
