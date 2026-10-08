<?php

namespace App\Http\Controllers;

use App\Models\Commit;
use App\Services\CommitService;

class CommitController extends Controller
{
    public function index()
    {
        $commits = Commit::latest()->get();

        return view('index', compact('commits'));
    }

    public function sync(CommitService $commitService)
    {
        $commitService->sync();

        return redirect()->route('commits.index')->with('success', 'synced');
    }
}
