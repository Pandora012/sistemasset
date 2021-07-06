<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TambahModel extends Model
{

    protected $table = "tambahasset";

    public function allData(){

         return DB::table('tambahasset')->get();
    }

    public function detailData($id){
        return DB::table('tambahasset')->where('id',$id)->first();
    }

    public function addData($data){
        DB::table('tambahasset')->insert($data);
    }

    public function editData($id, $data){
        DB::table('tambahasset')->where('id', $id)->update($data);
    }
    
    public function deleteData($id){
        DB::table('tambahasset')->where('id', $id)->delete();
    }
}
