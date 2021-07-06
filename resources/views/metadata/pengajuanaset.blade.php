@extends('layouts.index')
@section('content')
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Pengajuan Aset</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"></li>
                        </ol>

                        <!-- Form input Mulai Disini -->
                        <div class="card mt-2">
                            <div class="card-header">
                              <h3>Aset Yang Ingin Diajukan</h3>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{url('pengajuanaset/insert')}}">
                                    @csrf
                                    <div class="form-group row">
                                      <label for="inputNamaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
                                      <div class="col-sm-10">
                                        <input type="text" id="nama" name="nama" class="form-control">
                                      </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="inputHargaBarang" class="col-sm-2 col-form-label">Harga Barang</label>
                                        <div class="col-sm-10">
                                          <input type="text" id="harga" name="harga" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                            <label for="inputHargaBarang" class="col-sm-2 col-form-label">Jumlah Barang</label>
                                            <input type="number" name="jumlah" style="width:10%;margin-left:12px;" class="form-control" id="jumlah">
                                        </div>
                                    
                                    <div class="form-group row">
                                        <label for="inputHargaBarang" class="col-sm-2 col-form-label">Alasan Pengajuan Barang</label>
                                            <div class="col-sm-10">
                                            <textarea name="alasan"  class="form-control" id="alasan" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <br>
                                    <button type="kirim" class="btn btn-primary float-right">Kirim</button>
                                </form>
                                </div>

                                 
                            </div>
                        </div>
                          <!-- Form input Stop Disini -->

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