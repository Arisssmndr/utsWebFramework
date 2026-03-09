<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $customers = Customers::all();

        $cari = $request->customer_name;
        if (!empty($request->customer_name)){
            $customers = Customers::where('customer_name', 'LIKE', '%' . $cari . '%')
            ->get();
        }

        // addres supplier
        $cari = $request->address;
        if (!empty($request->address)){
            $customers = Customers::where('address', 'LIKE', '%' . $cari . '%')
            ->get();
        }

        return view('customers.index', compact('customers'));

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $customers = Customers::create($request->all());
        if ($customers) {
            return redirect('/customer')->with('success', 'Data berhasil di simpan');
        } else {
            return redirect('/customer')->with('error', 'Data gagala di simpan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        //
        $customers = Customers::find($id);
        $update = $customers->update($request->all());
        if ($update) {
            return redirect ('/customer')->with('success', 'Data berhasil di update');
        } else {
            return redirect ('/customer')->with('error', 'Data gagal di update');
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        //
        $customers = Customers::find($id);
        return view ('/customers/update', compact('customers'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $customers = Customers::find($id);
        $delete = $customers->delete();
        if ($delete) {
            return redirect ('/customer')->with('success', 'Data berhasil di hapus');
        } else {
            return redirect ('/customer')-> with('error', 'Data gagal di hapus');
        }
    }
}
