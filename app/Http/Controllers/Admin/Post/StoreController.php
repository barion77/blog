<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        dd($request);
        exit;
        $tag_ids = $data['tag_ids'];
        $preview_image = Storage::put('/images', $data['preview_image']);
        $main_image = Storage::put('/images', $data['main_image']);
        $post = Post::firstOrCreate(['title' => $data['title']], [
            'title' => $data['title'],
            'content' => $data['content'],
            'category_id' => $data['category_id'],
            'preview_image' => $preview_image,
            'main_image' => $main_image,
        ]);

        $post->tags()->attach($tag_ids);

        return redirect()->route('admin.post.index');
    }
}
