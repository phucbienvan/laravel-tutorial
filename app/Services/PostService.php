<?php


namespace App\Services;


use App\Models\Post;
use Exception;
use Illuminate\Support\Facades\Log;

class PostService
{
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    function getList()
    {
        $posts = $this->post->get();

        return $posts;
    }

    function insertPost($request)
    {
        try {
            $this->post::create($request);

            return true;
        } catch (Exception $e) {
            Log::error($e);

            return false;
        }
    }

    function updatePost($request, $id) {
        try {
            $this->post = Post::find($id);
            $this->post->title = $request->title;
            $this->post->description = $request->description;
            $this->post->save();
            return true;
        } catch (Exception $e) {
            Log::error($e);

            return false;
        }
    }
}
