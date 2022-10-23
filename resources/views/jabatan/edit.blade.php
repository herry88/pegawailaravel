@extends('master')

@section('title')
    <title>Edit Jabatan</title>
@endsection

@section('main-content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Jabatan</h1>
            </div>
            <div class="section-title">
                <h6>Halaman Edit jabatan</h6>
            </div>
            <div class="section-body">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Jabatan</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('jabatan.update', $jabatan->id) }}" method="post">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="">Nama Jabatan</label>
                                <input type="text" class="form-control" value="{{ $jabatan->namajabatan }}"
                                    name="namajabatan">
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <input type="text" value="{{ $jabatan->deskripsi }}" class="form-control"
                                    name="deskripsi">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
