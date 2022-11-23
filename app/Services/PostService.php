<?php


namespace App\Services;


use App\Models\Post;
use http\Env\Request;
use mysql_xdevapi\Exception;

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

    function store($request)
    {
        try {
            $this->post::create([
                'title' => $request->title,
                'description' => $request->description
            ]);
            return true;
        } catch (\Throwable $e) {
            report($e);
            return false;
        }
    }
}
