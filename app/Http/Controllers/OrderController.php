<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    public function index()
    {
        return view('ordering');
    }
    public function store(Request $request)
    {
        $order = new Order();
        $order->name = $request->name;
        $order->surname = $request->surname;
        $order->address = $request->address;
        $order->date = $request->date;
        $order->time = $request->time;
        $order->procedure = $request->procedure;
        $order->message = $request->message;
        $order->save();
        return redirect('ordering')->with('status', 'Your order has been accepted');
    }
    public function allData() {
        return view('home', ['data'=> Order::all()]);
    }
    // public function updateOrder($id){
    //     $order = new Order;
    //     return view('order-change', ['data'=> $order->find($id)]);
    // }
    // public function showDetails($id){
    //     $order = new Order;
    //     return view('show-order', ['data'=> $order->find($id)]);
    // }
}