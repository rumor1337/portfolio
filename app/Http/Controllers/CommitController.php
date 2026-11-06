<?php

namespace App\Http\Controllers;

use App\Models\Commit;
use App\Services\CommitService;
use App\Services\HackaTimeService;

class CommitController extends Controller
{
    public function index(HackaTimeService $hackaTimeService)
    {
        $commits = Commit::latest()->get();
        $hackatime = $hackaTimeService->todaySeconds();

        return view('index', compact('commits', 'hackatime'));
    }

    public function sync(CommitService $commitService)
    {
        $commitService->sync();

        return redirect()->route('commits.index')->with('success', 'synced');
    }
}
