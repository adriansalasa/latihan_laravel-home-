<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\_isi_pulsa_;

class beliController extends Controller
{    

    public function store(Request $request)
    {
    	$request->validate([
    		'NTelp' => 'required'
    	]);
        _isi_pulsa_::create([
        	'No_Telp' => $request->NTelp,
        	'Nm_Rek' => $request->NRek,
        	'Nm_Pemilik' => $request->NmPem,
        	'Nm_Paket' => $request->NmPaket,
        	'Hrg_Paket' => $request->HrgPaket
        ]);

        return redirect('/Product')->with('status', 'Selamat...Pengisian Berhasil');
    }


}
