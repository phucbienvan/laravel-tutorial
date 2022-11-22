<?php


namespace App\Services;


use App\Models\Post;

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

    }
}
