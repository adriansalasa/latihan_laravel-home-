<?php

namespace App\Http\Controllers;

use App\customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtCustomer = customer::all();
        return view('Customer/index', ['customer' => $dtCustomer]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Customer/new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        customer::create([
            'Nic'=> $request->Nic,
            'nama_lengkap'=> $request->nama,
            'nama_panggilan'=> $request->np,
            'email'=> $request->email,
            'alamat'=> $request->alamat,
            'createUser'=> "System",
            'updateUser'=> ""
        ]);
        return redirect('/Customer')->with('status', 'Tambah data berhasil');
    } 

    /**
     * Display the specified resource.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(customer $customer)
    {
        return view('/Customer/detail', ['customer' => $customer]);
        // return $customer;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(customer $customer)
    {
        return view('/Customer/edit', ['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customer $customer)
    {
        customer::where('id', $customer->id)
                    ->update([
                        'Nic' => $request->Nic,
                        'nama_lengkap' => $request->nama,
                        'nama_panggilan' => $request->np,
                        'email' => $request->email,
                        'alamat' => $request->alamat
                    ]);
        return redirect('/Customer')->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer)
    {
        customer::destroy($customer->id);     
        return redirect('/Customer')->with('status', 'Data berhasil dihapus');
    }
}
