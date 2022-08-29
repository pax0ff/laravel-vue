<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog as BlogModel;
class BlogController extends Controller
{
    public static function all() {
        return BlogModel::getBlogPosts();
    }
    public static function post() {
        $id = request('id');
        return BlogModel::getBlogPost($id);
    }

    public static function save() {
        return BlogModel::saveBlogPost();
    }

    public static function delete() {
        $id = request('id');
        return BlogModel::deleteBlogPost(id);
    }
}
