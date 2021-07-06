<?php

namespace App\Http\Controllers;

use App\Models\PengajuanModel;
use Illuminate\Http\Request;


class PersetujuanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->PengajuanModel = new PengajuanModel();
    }

    public function persetujuan(){
        $data = [
            'persetujuan' => $this->PengajuanModel->alldata(),
        ];
        return view('metadata.persetujuanaset',$data);
    }

    public function setuju($id){
        $data = PengajuanModel::find($id);
        $data->update([
            'status'=>1,
        ]);
        return redirect()->back();
    }

    public function tolak($id){
        $data = PengajuanModel::find($id);
        $data->update([
            'status'=>2,
        ]);
        return redirect()->back();
    }
}
