<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker;
class PostsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private function Faker(): \Faker\Generator
    {
        return Faker\Factory::create();

    }
    public function run()
    {
        $name = $this->Faker()->jobTitle();
        DB::table('category_posts')->insert([
            'name'=>$name,
            'created_at' =>date("Y-m-d H:i:s"),
            'updated_at' =>date("Y-m-d H:i:s")
        ]);
    }
}
