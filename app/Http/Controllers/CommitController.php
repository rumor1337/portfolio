<?php

namespace App\Http\Controllers;

use App\Services\CommitService;

class CommitController extends Controller
{
    public function index(CommitService $commitService)
    {
        $commits = $commitService->getCommits();

        return view('index', compact('commits'));
    }
}
