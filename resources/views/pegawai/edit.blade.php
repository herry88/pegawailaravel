@extends('master')

@section('title')
    <title>Pegawai Page</title>
@endsection

@section('main-content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Pegawai Edit</h1>
            </div>
            <div class="section-title">
                <h6>Edit Data Pegawai</h6>
            </div>
            <div class="section-body">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('pegawai.update', $pegawai->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Nama Pegawai</label>
                                <input type="text" value="{{ $pegawai->namapegawai }}" name="namapegawai"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Jabatan</label>
                                <select name="jabatan_id" class="form-control selectric">
                                    <option value="">Pilih Jabatan</option>
                                    @foreach ($jabatan as $res)
                                        <option value="{{ $res->id }}"
                                            {{ $pegawai->jabatan_id == $res->id ? 'selected' : '' }}>{{ $res->namajabatan }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{ $pegawai->alamat }}">
                            </div>
                            <button class="btn btn-primary">Update Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
