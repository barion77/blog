<?php

namespace App\Http\Controllers\Profile\Liked;

use App\Http\Controllers\Controller;;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = auth()->user()->likedPosts; 
        return view('profile.liked.index', compact('posts'));
    }
}
