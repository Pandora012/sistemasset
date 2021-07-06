<?php

namespace App\Http\Controllers;

use App\Models\TambahModel;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->TambahModel = new TambahModel();
    }

    public function data(){
        $data = [
            'tambah' => $this->TambahModel->allData(),
        ];
        return view('metadata.dataaset', $data);
    }
}
