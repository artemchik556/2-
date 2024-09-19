<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();  // Получение всех записей из таблицы products
        return view('products', compact('products'));
    }
}
