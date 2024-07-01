<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    public function index(){

        //get posts
        $posts = Post::latest()->paginate(5);

        //return collection of as a resource
        return new PostResource(true, 'List Data Posts', $posts);
    }
}