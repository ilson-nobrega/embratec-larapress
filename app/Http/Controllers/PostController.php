<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $query = new \WP_Query([]);
        $wpPosts = $query->get_posts();
        return (array) $wpPosts;
    }
}
