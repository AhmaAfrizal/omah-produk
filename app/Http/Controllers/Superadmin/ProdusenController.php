<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\tambahprodusen;
use App\Model\Detailtambahprodusen;

class ProdusenController extends Controller
{
    public function index()
    {
        return view('superadmin.kontributor.index');
    }

    public function input(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $produsen = new tambahprodusen;
        $produsen->name = $data ['name'];
        $produsen->email = $data ['email'];
        $produsen->save();

        $detailprodusen = new Detailtambahprodusen;
        $detailprodusen->user_id = $produsen->id;
        $detailprodusen->address = $data['address'];
        $detailprodusen->phone = $data['phone'];
        $detailprodusen->kode_pos = $data['kode_pos'];
        $detailprodusen->save();



        return redirect()->back()->with('status', 'Data Berhasil di Input');
    }

}
