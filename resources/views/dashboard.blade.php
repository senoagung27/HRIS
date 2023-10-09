@extends('layouts.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-primary">
                                <i class="far fa-user"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h5>User</h5>
                                    <h4>Data</h4>
                                </div>
                                <div class="card-body">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="far fa-newspaper"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h5>Pegawai</h5>
                                    <h4>Data</h4>
                                </div>
                                <div class="card-body">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="card">
                            <h3>Data Pegawai</h3>
                            <div class="card-body">
                                @include('layouts._flash_message')
                                <div class="row">
                                    {{-- <div class="col-sm-6">
                                        <a href="{{ route('user.create') }}" type="button" class="btn btn-success btn-sm"><i
                                                class="glyphicon glyphicon-plus"></i> Tambah Pegawai</a>
                                    </div> --}}
                                </div>
                                <br />
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>NIP</th>
                                            <th>Name</th>
                                            <th>Alamat</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Tanggal Join</th>
                                            <th width="150">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- <tr>
                                            @foreach ($dataPegawai as $data)
                                                <td>
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td>{{ $data->nip }}</td>
                                                <td>{{ $data->nama_pegawai }}</td>
                                                <td>{{ $data->alamat }}</td>
                                                <td>{{ date('d F Y', strtotime($data->tanggal_lahir)) }}</td>
                                                <td>{{ date('d F Y', strtotime($data->tanggal_join)) }}</td>
                                                <td> <a href="/EditUsers/{{ $data->id }}"
                                                        class="btn btn-primary btn-action mr-1"><i
                                                            class="fas fa-pencil-alt"></i></a>
                                                    <a href="/HapusPegawai/{{ $data->id }}"
                                                        class="btn btn-danger btn-action"><i
                                                            class="fas fa-trash"></i></a>
                                                </td>

                                        </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
                                {{-- {{ $pegawais->links() }} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('ff')
    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
            });
        });
    </script>
@endsection
