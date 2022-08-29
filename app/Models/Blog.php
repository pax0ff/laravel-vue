<?php

namespace App\Models;

class Blog extends \Illuminate\Database\Eloquent\Model
{
    public static function getBlogPosts() {

    }

    public static function getBlogPost($id) {
        $id = request('id');

        //query for get blog post with specific id


    }

    public static function saveBlogPost() {

        //query for saving blog post

    }
    public static function deleteBlogPost($id) {
        $id = request('id');

        //query for deleting blog post with specific id
    }
}
