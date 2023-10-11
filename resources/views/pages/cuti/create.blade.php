@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            @if (('session')('edit'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Berhasil!!!!</h5>
                    {{-- {{ session('edit') }} --}}
                </div>
            @endif
            @if (('session')('tambah'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Berhasil!!!!</h5>
                    {{-- {{ session('tambah') }} --}}
                </div>
            @endif
            <div class="section-header">
                <h1>Tambah Pengajuan Cuti</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Tambah Pengajuan Cuti</div>
                </div>
            </div>

            <div class="section-body">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="row">
                                    <input type="hidden" name="kode_booking">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Nama Pegawai</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-book"></i>
                                                    </span>
                                                </div>
                                                <input type="text" name="nama" class="form-control float-right"
                                                    id="reservation" placeholder="Nama Pegawai">
                                                @if ($errors->has('nama'))
                                                    <span class="text-danger text-left">{{ $errors->first('nama') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Jabatan</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-book"></i>
                                                    </span>
                                                </div>
                                                <input type="text" name="jabatan" class="form-control float-right"
                                                    id="reservation" placeholder="Jabatan">
                                                @if ($errors->has('jabatan'))
                                                    <span class="text-danger text-left">{{ $errors->first('jabatan') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Tanggal Join</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-book"></i>
                                                    </span>
                                                </div>
                                                <input type="date" name="tanggal_join" class="form-control float-right"
                                                    id="reservation" placeholder="Tanggal Join">
                                                @if ($errors->has('tanggal_join'))
                                                    <span class="text-danger text-left">{{ $errors->first('tanggal_join') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="btn float-right">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="{{ route('cuti.index') }}" class="btn btn-default">Back</a>
                                    </div>
                                    <!-- <a href="/Berkas" class="btn btn-success fa-pull-right">Back</a> -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
