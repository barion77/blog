<?php

namespace App\Http\Controllers\Profile\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;

;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('profile.comment.index');
    }
}
