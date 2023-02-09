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
        $order->user_id = $request->user_id;
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
    public function showOneOrder($id) {
        $order = new Order();
        return view('order-details', ['data'=> $order->find($id)]);
    }
    public function changeOrder($id){
        $order = new Order();
        return view('order-change', ['data'=> $order->find($id)]);
    }
    public function changeOrderSubmit($id, Request $request){
        $order = Order::find($id);
        $order->user_id = $request->user_id;
        $order->name = $request->name;
        $order->surname = $request->surname;
        $order->address = $request->address;
        $order->date = $request->date;
        $order->time = $request->time;
        $order->procedure = $request->procedure;
        $order->message = $request->message;
        $order->save();
        return redirect()->route('order-details', $id)->with('status', 'Your order has been changed');
    }
    public function deleteOrder($id){
        Order::find($id)->delete();
        return redirect()->route('home')->with('status', 'Your order has been deleted');
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