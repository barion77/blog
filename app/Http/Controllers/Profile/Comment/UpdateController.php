<?php

namespace App\Http\Controllers\Profile\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;

use App\Http\Requests\Profile\Comment\UpdateRequest;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Comment $comment)
    {
        $data = $request->validated();
        $comment->update($data);
        return redirect()->route('profile.comment.index');
    }
}
