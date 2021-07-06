@extends('layouts.index')
@section('content')
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Pengeditan Asset</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"></li>
                        </ol>

                        <!-- Form input Mulai Disini -->
                        <div class="card mt-2">
                            <div class="card-header">
                              <h3>Aset Yang Ingin Di Update</h3>
                            </div>
                            
                                <div class="card-body">
                                    <form method="POST" action="/dataaset/update/{{$data->id}}">
                                        @csrf
                                        <div class="form-group row">
                                        <label for="inputNamaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="nama"name="nama"class="form-control" value="{{$data->nama}}">
                                        </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="inputKodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>
                                            <div class="col-sm-10">
                                            <input type="text" id="kode"name="kode"class="form-control" value="{{$data->kode}}">
                                            </div>
                                        </div>

                                        
                                        <div class="form-group row">
                                            <label for="date" class="col-sm-2 col-form-label">Tanggal Masuk Barang</label>
                                            <div class="col-sm-5">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="far fa-calendar-alt"></i></span>
                                                    </div>
                                                    <input type="date" style="width:200px;" class="form-control" id="tanggal" name="tanggal" placeholder="dd-mm-yyyy" autocomplete="off" value="{{$data->tanggal}}" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputHargaBarang" class="col-sm-2 col-form-label">Harga Barang</label>
                                            <div class="col-sm-10">
                                            <input type="text" id="harga"name="harga"class="form-control" value="{{$data->harga}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputHargaBarang" class="col-sm-2 col-form-label">Jumlah Barang</label>
                                            <input type="number" name="jumlah" style="width:10%;margin-left:12px;" class="form-control" id="jumlah" value="{{$data->jumlah}}">
                                        </div>
                                        
                                        <br>
                                            <button type="kirim" class="btn btn-primary float-right">Kirim</button>
                                    </form>
                                </div>  
                            </div> 
                             <!-- Form input Stop Disini -->                               
                    </div>
                         
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
@endsection