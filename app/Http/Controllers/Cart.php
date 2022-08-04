<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart as CartModel;

class Cart extends Controller
{
    public $cartModel = null;
        public function __construct() {
            $cartModel = new \App\Models\Cart();
            return $cartModel;
        }
}
