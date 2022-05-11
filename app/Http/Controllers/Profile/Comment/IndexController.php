<?php

namespace App\Http\Controllers\Profile\Comment;

use App\Http\Controllers\Controller;;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $comments = auth()->user()->comments;
        return view('profile.comment.index', compact('comments'));
    }
}
