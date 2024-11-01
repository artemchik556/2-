<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(Request $request, $id)
    {
        // Проверка, что пользователь авторизован
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Вы должны быть авторизованы для совершения заказа.');
        }

        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($id);
        $order = new Order();
        $order->product_id = $product->id;
        $order->quantity = $request->quantity;
        $order->total = $product->стоимость * $request->quantity;

        // Связь заказа с авторизованным пользователем
        $order->user_id = Auth::id();
        $order->save();

        return redirect()->back()->with('success', 'Заказ успешно оформлен!');
    }
    public function myOrders()
    {
        // Получаем заказы текущего пользователя
        $orders = Order::where('user_id', Auth::id())->get();
        return view('orders.my-orders', compact('orders'));
    }
    // public function product()
    // {
    //     return $this->belongsTo(Product::class);
    // }
}
