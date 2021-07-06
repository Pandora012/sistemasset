@extends('layouts.index')
@section('content')
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Aset</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Kode Barang</th>
                                                <th>Tanggal Masuk Barang</th>
                                                <th>Harga Barang</th>
                                                <th>Jumlah Barang</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                                <?php $no=1; ?>
                                                @foreach ($tambah as $data)
                                                <tr>
                                                <td>{{$no++}}</td>
                                                <td>{{$data->nama}}</td>
                                                <td>{{$data->kode}}</td>
                                                <td>{{$data->tanggal}}</td>
                                                <td>{{$data->harga}}</td>
                                                <td>{{$data->jumlah}}</td>
                                                <td>
                                                    
                                                
                                                    <!-- Button Edit & Delete -->
                                                    <a href="/dataaset/edit/{{$data->id}}" class="btn btn-primary" >Edit</a>
                                                    <a href="/dataaset/delete/{{$data->id}}" class="btn btn-danger" >Delete</a>
                                                    
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
