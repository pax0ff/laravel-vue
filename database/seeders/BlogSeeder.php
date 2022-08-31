<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker;
class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function getUser() {
        $users = DB::table('users')->selectRaw('users.name')->get();
        $id = rand(0,count($users)-1);
        return $users[$id]->name;
    }
    private function Faker(): \Faker\Generator
    {
        return Faker\Factory::create();

    }
    public function run()
    {
        //dd($this->getUser());
        $content = $this->Faker()->text(150);
        $title = $this->Faker()->text(40);
        $excerpt = Str::substr($content,0,15);
        $slug = Str::slug($excerpt,'-');
        $image = 'https://picsum.photos/300/300';
        $author = $this->getUser();
        $created = date("Y-m-d H:i:s");
        $updated = date("Y-m-d H:i:s");
        DB::table('posts')->insert([
            'title' => $title,
            'content' => $content,
            'excerpt' => $excerpt,
            'slug' => $slug,
            'image' => $image,
            'author' => $author,
            'created_at' => $created,
            'updated_at' => $updated,
        ]);
    }
}
