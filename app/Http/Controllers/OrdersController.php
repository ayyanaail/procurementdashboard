<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Orders::latest()->paginate(10);
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'VendorName' => 'required|string|max:255',
            'PQNo' => 'required|string|max:255',
            'PQDate' => 'required|date',
            'PINo' => 'required|string|max:255',
            'PIDate' => 'required|date',
            'APValue' => 'required|numeric',
            'APDate' => 'required|date',
            'CINo' => 'required|string|max:255',
            'CIValue' => 'required|numeric',
            'CIDate' => 'required|date',
            'BLNo' => 'required|string|max:255',
            'BLDate' => 'required|date',
            'ETA' => 'required|date',
            'BPValue' => 'required|numeric',
            'BPDate' => 'required|date',
        ]);

        Orders::create($validated);

        return redirect()->route('orders.index')
            ->with('success', 'Order created successfully.');
    }

    public function show(Orders $order)
    {
        return view('orders.show', compact('order'));
    }

    public function edit(Orders $order)
    {
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, Orders $order)
    {
        $validated = $request->validate([
            'VendorName' => 'required|string|max:255',
            'PQNo' => 'required|string|max:255',
            'PQDate' => 'required|date',
            'PINo' => 'required|string|max:255',
            'PIDate' => 'required|date',
            'APValue' => 'required|numeric',
            'APDate' => 'required|date',
            'CINo' => 'required|string|max:255',
            'CIValue' => 'required|numeric',
            'CIDate' => 'required|date',
            'BLNo' => 'required|string|max:255',
            'BLDate' => 'required|date',
            'ETA' => 'required|date',
            'BPValue' => 'required|numeric',
            'BPDate' => 'required|date',
        ]);

        $order->update($validated);

        return redirect()->route('orders.index')
            ->with('success', 'Order updated successfully.');
    }

    public function destroy(Orders $order)
    {
        $order->delete();

        return redirect()->route('orders.index')
            ->with('success', 'Order deleted successfully.');
    }
}
