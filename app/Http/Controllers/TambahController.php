<?php

namespace App\Http\Controllers;

use App\Models\TambahModel;
use Illuminate\Http\Request;


class TambahController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->TambahModel = new TambahModel();
    }

    public function buat(){

        $data = [
            'tambah' => $this->TambahModel->allData(),
        ];
        return view('metadata.tambahaset');
    }

    public function insert(){

        Request()->validate([
            'nama' => 'required',
            'kode' => 'required | unique:tambahasset',
            'tanggal' => 'required',
            'harga' => 'required',
            'jumlah' => 'required'
        ]);

        $data = [
            'nama' =>Request()->nama,
            'kode' =>Request()->kode,
            'tanggal' =>Request()->tanggal,
            'harga' =>Request()->harga,
            'jumlah' =>Request()->jumlah
        ];

        $this->TambahModel->addData($data);
        return redirect('dataaset');
    }

    public function edit($id){
        $data = TambahModel::find($id);
        return view('metadata.editaset',['data' =>  $data]);
    }

    public function update($id){

        Request()->validate([
            'nama' => 'required',
            'kode' => 'required',
            'tanggal' => 'required',
            'harga' => 'required',
            'jumlah' => 'required'
        ]);

        $data = [
            'nama' =>Request()->nama,
            'kode' =>Request()->kode,
            'tanggal' =>Request()->tanggal,
            'harga' =>Request()->harga,
            'jumlah' =>Request()->jumlah
        ];

        $this->TambahModel->editData($id,$data);
        return redirect('dataaset');
    }

    public function delete($id){
        $this->TambahModel->deleteData($id);
        return redirect()->back();
    }
}
