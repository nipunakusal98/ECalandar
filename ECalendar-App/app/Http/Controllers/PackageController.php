<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Package;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $packages = Package::all();
        return view ('packages.index')->with('packages',$packages);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('packages.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $input = $request->all();
        Package::create($input);
        return redirect('package')->with('flash_message', 'New Package Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $package = Package::find($id);
        return view('packages.show')->with('packages', $package);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $package = Package::find($id);
        return view('packages.edit')->with('packages', $package);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $package = Package::find($id);
        $input = $request->all();
        $package->update($input);
        return redirect('package')->with('flash_message', 'Package Details Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        Package::destroy($id);
        return redirect('package')->with('flash_message', 'Package Data Deleted.');
    }
}
