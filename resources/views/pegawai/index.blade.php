@extends('master')

@section('title')
    <title>Data Pegawai</title>
@endsection

@section('main-content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Pegawai</h1>
            </div>
            <div class="section-title">
                <h4>Data Pegawai</h4>
            </div>
            <div class="section-body">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('pegawai.create') }}" class="btn btn-primary">Tambah Data</a>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Pegawai</th>
                                        <th>Jabatan</th>
                                        <th>Alamat</th>
                                        <th>Tools</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($pegawai as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->namapegawai }}</td>
                                            <td>{{ $item->jabatan_id }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>
                                                <a href="{{ route('pegawai.edit', $item->id) }}" class="btn btn-warning"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Data Belum Ada</td>
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
