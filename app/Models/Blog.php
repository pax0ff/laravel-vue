<?php

namespace App\Models;

use App\Http\Requests\GeneralRequest as GeneralRequest;
use App\Models\Category as CategoryModel;
use Illuminate\Support\Facades\DB;

class Blog extends \Illuminate\Database\Eloquent\Model
{
    public static function getBlogPosts() {
        return DB::table('posts')
            ->leftJoin('category_posts','category_posts.id','=','posts.category_id')
            ->selectRaw('category_posts.name as categorie,posts.id,posts.title,posts.excerpt,posts.image,posts.author,posts.content,posts.created_at')
            ->get();
    }

    public static function getBlogPostsLimited($limit) {
        return DB::table('posts')
            ->leftJoin('category_posts','category_posts.id','=','posts.category_id')
            ->selectRaw('category_posts.name as categorie,posts.id,posts.title,posts.excerpt,posts.image,posts.author,posts.content,posts.created_at')
            ->limit($limit)
            ->get();
    }

    public static function getBlogPost() {
        return DB::table('posts')
            ->leftJoin('category_posts','category_posts.id','=','posts.category_id')
            ->selectRaw('category_posts.name as categorie,posts.id,posts.title,posts.excerpt,posts.image,posts.author,posts.content,posts.created_at')
            ->where('posts.id','=', GeneralRequest::getPostIdFromRequest())
            ->get();


    }

    public static function getBlogPostsByCategory() {
        return DB::table('posts')
            ->leftJoin('category_posts','category_posts.id','=','posts.category_id')
            ->selectRaw('category_posts.name as categorie,category_posts.id,posts.id,posts.title,posts.excerpt,posts.image,posts.author,posts.content,posts.created_at')
            ->where('posts.category_id','=', CategoryModel::getCategoryPostsId())
            ->get();
    }

    public static function saveBlogPost() {

        //query for saving blog post

    }
    public static function deleteBlogPost($id) {
        $id = request('id');

        //query for deleting blog post with specific id
    }
}
