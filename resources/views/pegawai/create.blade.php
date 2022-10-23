@extends('master')

@section('title')
    <title>Create Data Pegawai</title>
@endsection

@section('main-content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah data</h1>
            </div>
            <div class="section-body">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('pegawai.store') }}" method="post">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="">Nama Pegawai</label>
                                <input type="text" name="namapegawai" class="form-control" placeholder="Nama Pegawai">
                            </div>
                            <div class="form-group">
                                <label for="">Jabatan</label>
                                <select name="jabatan_id" class='form-control'>
                                    <option value="">Pilih jabatan</option>
                                    @foreach ($jabatan as $jb)
                                        <option value="{{ $jb->id }}">{{ $jb->namajabatan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
