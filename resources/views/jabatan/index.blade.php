@extends('master')

@section('title')
    <title>Halaman Jabatan</title>
@endsection

@section('main-content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Jabatan</h1>
            </div>
            <div class="section-title">
                <h6>Halaman Jabatan</h6>
            </div>
            <div class="section-body">
                @if ($sukses = Session::get('sukses'))
                    <strong>{{ $sukses }}</strong>
                @endif
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('jabatan.create') }}" class="btn btn-primary">
                            <i class="far fa-add"></i> Tambah Data</a>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Jabatan</th>
                                        <th>Deskripsi</th>
                                        <th>Tools</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($jabatan as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->namajabatan }}</td>
                                            <td>{{ $item->deskripsi }}</td>
                                            <td>
                                                <a href="{{ route('jabatan.edit', $item->id) }}"
                                                    class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
                                                <a href="{{ route('jabatan.destroy', $item->id) }}"
                                                    class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">Belum Ada Data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
