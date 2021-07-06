<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PengajuanModel extends Model
{
    protected $table = "pengajuanasset";
    protected $guarded = [];

    public function allData(){
        return DB::table('pengajuanasset')->get();
    }

    public function addData($data){
        DB::table('pengajuanasset')->insert($data);
    }
}
