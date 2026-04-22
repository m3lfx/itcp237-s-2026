<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use App\Models\Order;
use App\Models\Item;
use Storage;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $customers = Customer::all();
        // // dd($customers);
        // return response()->json($customers);
        // $customer = User::find(1)->customer;
        // $user = Customer::find(36)->user->name;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $orders = Customer::find($id)->orders;
        // // dd($orders);
        // foreach ($orders as $order) {
        //     dump($order->orderinfo_id, $order->placed);
        // }
        // $customer = Order::find($id)->customer;
        // dd($customer);

        // $items = Order::find($id)->items;

        // foreach ($items as $item) {
        //     dump($item->description, $item->sell_price);
        // }
        // dd($items);

        $orders = Item::find($id)->orders;

        // foreach ($items as $item) {
        //     dump($item->description, $item->sell_price);
        // }
        dd($orders);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
