<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker;
class ProductSeeder extends Seeder
{

    private static function Faker(): \Faker\Generator
    {
        return Faker\Factory::create();

    }
    private function setProductName(): string
    {
        return $this->Faker()->bothify('S????');
    }

    private function setProductCategory(): int
    {
        return rand(1,2);
    }

    private function setProductSKU(): string
    {
        return $this->Faker()->bothify('SKU####');
    }

    private function setProductPrice(): int
    {
        return rand(1,150);
    }

    private function setProductStock(): int
    {
        return rand(1,10);
    }

    private function setProductCreated() {

        return date('Y-m-d H:i:s');
    }

    private function setProductUpdated() {

        return date('Y-m-d H:i:s');
    }

    private function setProductImage(): string
    {
        return 'https://picsum.photos/200/300';
    }

    private function setProductCurrency(): string
    {
        return 'lei';
    }

    private function setProductDescription(): string {
        return $this->Faker()->text(30);
    }

    public function run()
    {
        return DB::table('products')->insert([
            'name'=> $this->setProductName(),
            'sku'=>$this->setProductSKU(),
            'category_id'=>$this->setProductCategory(),
            'price'=>$this->setProductPrice(),
            'stock'=>$this->setProductStock(),
            'created_at'=>$this->setProductCreated(),
            'updated_at'=>$this->setProductUpdated(),
            'image'=>$this->setProductImage(),
            'description'=>$this->setProductDescription(),
            'currency'=>$this->setProductCurrency()
        ]);
    }
}
