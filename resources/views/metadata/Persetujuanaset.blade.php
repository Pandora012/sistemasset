@extends('layouts.index')
@section('content')
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Persetujuan Aset</h1>
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
                                                <th>Harga Barang</th>
                                                <th>Jumlah Barang</th>
                                                <th>Alasan Pengajuan</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; ?>
                                            @foreach ($persetujuan as $data)
                                            
                                            <tr>
                                                <td>{{$no++}}</td>
                                                <td>{{$data->nama}}</td>
                                                <td>{{$data->harga}}</td>
                                                <td>{{$data->jumlah}}</td>
                                                <td>{{$data->alasan}}</td>
                                                <td>@switch($data->status)
                                                    @case(0)
                                                        <span class="badge bg-warning text-dark">Pending</span>
                                                        @break
                                                    @case(1)
                                                        <span class="badge bg-success">Disetujui</span>
                                                        @break
                                                    @case(2)
                                                        <span class="badge bg-danger">Ditolak</span>
                                                        @break
                                                    @default
                                                        
                                                @endswitch</td>
                                                <td>
                                                    <!-- Button to Open the Modal --> 
                                                    @role('manager')                                                   
                                                    <form method="POST" action="/persetujuanaset/setuju/{{$data->id}}">
                                                        @csrf 
                                                        @method("PUT")
                                                        <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                                                            Setuju
                                                        </button>
                                                    </form>

                                                    <form method="POST" action="/persetujuanaset/tolak/{{$data->id}}">
                                                        @csrf 
                                                        @method("PUT")
                                                        <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#">
                                                            Tolak
                                                        </button>
                                                    </form>
                                                    @endrole
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