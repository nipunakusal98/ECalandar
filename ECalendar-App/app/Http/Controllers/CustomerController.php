<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $customers = Customer::all();
        return view ('customers.index')->with('customers',$customers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $input = $request->all();
        Customer::create($input);
        return redirect('customer')->with('flash_message', 'New customer inserted');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $customer = Customer::find($id);
        return view('customers.show')->with('customers',$customer);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $customer = Customer::find($id);
        return view('customers.edit')->with('cusotmers', $customer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $customer = Customer::find($id);
        $input = $request->all();
        $customer->update($input);
        return redirect('customer')->with('flash_message','Customer Details Updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        Customer::destroy($id);
        return redirect('customer')->with('flash_message', 'Customer Data Deleted.');
    }
}
