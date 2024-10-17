<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();  // Получение всех записей из таблицы products
        $copyright = "Artem";
        return view('allproducts', compact('products', "copyright" ,'products'));
    }

    public function show($id)
{
    // Находим товар по ID
    $product = Product::findOrFail($id);

    // Отправляем товар на страницу представления
    return view('product', compact('product'));
}

}

