<?php

namespace App\Http\Controllers;

use App\Models\PengajuanModel;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->PengajuanModel = new PengajuanModel();
    }

    public function pengajuan(){

        $data = [
            'pengajuan' => $this->PengajuanModel->alldata(),
        ];
        return view('metadata.pengajuanaset',$data);
    }

    public function insert(){

        Request()->validate([
            'nama' => 'required',
            'harga' => 'required',
            'jumlah' => 'required',
            'alasan' => 'required'
        ]);

        $data = [
            'nama' =>Request()->nama,
            'harga' =>Request()->harga,
            'jumlah' =>Request()->jumlah,
            'alasan' =>Request()->alasan
        ];

        $this->PengajuanModel->addData($data);
        return redirect('persetujuanaset');
    }
}
