@extends('master')

@section('title')
    <title>Tambah Data Inventaris</title>
@endsection

@section('main-content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Data Inventaris</h1>
            </div>
            <h2 class="section-title">Tambah Data Inventaris</h2>
            <div class="section-body">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('inventaris.store') }}" method="post">
                            <div class="form-group">
                                <label>Nama Inventaris</label>
                                <input type="text" name="namainventaris" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Pegawai</label>
                                <select name="pegawai_id" class="form-control">
                                    <option value="0">Pilih Data</option>
                                    @foreach ($pegawai as $pg)
                                        <option value="{{ $pg->id }}">{{ $pg->namapegawai }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-md-6">
                                <label for="">Tanggal Ambil</label>
                                <input type="date" name="tglambil" class="form-control">
                            </div>
                            <button class="btn btn-primary">Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
