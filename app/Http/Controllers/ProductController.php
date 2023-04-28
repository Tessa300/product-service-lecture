<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public static function getAllProducts () {
        $allProducts = DB::table('products')->select()->orderBy('name')->get();
        return json_encode($allProducts);
    }

    public static function getProductById(int $id) {
        $product = DB::table('products')->where('id', $id)->get();
        return json_encode($product);
    }

    public static function getProductsByIds(array $ids){
        return DB::table('products')->whereIn('id', $ids)->get();
    }
}
