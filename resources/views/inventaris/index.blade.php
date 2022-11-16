@extends('master')

@section('title')
    <title>Data Inventaris</title>
@endsection

@section('main-content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Inventaris</h1>
            </div>
            <h2 class="section-title">Data Inventaris</h2>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('inventaris.create') }}" class="btn btn-primary">Tambah Data</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Inventaris</th>
                                                <th>Nama Pegawai</th>
                                                <th>Tgl Ambil</th>
                                                <th>Tools</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($inventaris as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->namainventaris }}</td>
                                                    <td>{{ $item->pegawai_id }}</td>
                                                    <td>&nbsp;</td>
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
                </div>
            </div>
        </section>
    </div>
@endsection
