<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        $best_sellers_count = Product::select('products.*', DB::raw('SUM(order_items.quantity) as total_quantity'))
            ->join('order_items', 'products.id', '=', 'order_items.product_id')
            ->groupBy('products.id')
            ->having('total_quantity', '>', 1)
            ->count();
        $product_count = Product::count();
        $order_count = Order::count();
        $register_count = User::count();

        // Total revenue from completed orders
        $totalRevenue = Order::where('status', 'completed')->sum('total_amount');
        
        
        return view('dashboard',compact('product_count','order_count','register_count','totalRevenue','best_sellers_count'));        
    }
}
