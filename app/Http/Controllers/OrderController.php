<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request, $productId)
    {
        // Валидируем данные
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        // Находим товар по ID
        $product = Product::findOrFail($productId);

        // Проверяем доступное количество
        if ($request->quantity > $product->количество) {
            return back()->withErrors(['quantity' => 'Недостаточно товара на складе']);
        }

        // Считаем сумму заказа
        $total = $request->quantity * $product->стоимость;

        // Создаём заказ
        Order::create([
            'product_id' => $product->id,
            'quantity' => $request->quantity,
            'total' => $total,
        ]);

        // Вернём пользователя обратно с сообщением об успешном заказе
        return back()->with('success', 'Заказ успешно оформлен!');
    }
}
