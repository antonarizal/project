@extends('admin.layouts.main')
@section('title', 'Buku')
@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif
            <a href="buku/create" class="btn btn-primary">Tambah Buku</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Judul Buku</th>
                            <th>Tipe</th>
                            <th>Jenjang</th>
                            <th>Mapel</th>
                            <th>Penerbit</th>
                            <th>Penulis</th>
                            <th>ISBN</th>
                            <th>Edisi</th>
                            <th>Het</th>
                            <th>Gambar</th>
                            <th>Show</th>
                            <th>Edit</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bukus as $buku)
                            <tr>
                                <td>{{ $buku->nama }}</td>
                                <td>{{ $buku->tipe->tipe ?? 'null'}}</td>
                                <td>{{ $buku->jenjang->jenjang ?? 'null'}}</td>
                                <td>{{ $buku->mapel->mapel ?? 'null'}}</td>
                                <td>{{ $buku->penerbit->penerbit ?? 'null'}}</td>
                                <td>{{ $buku->penulis->penulis ?? 'null'}}</td>
                                <td>{{ $buku->isbn }}</td>
                                <td>{{ $buku->edisi->edisi ?? 'null'}}</td>
                                <td>{{ $buku->het }}</td>
                                <td>
                                    @if ($buku->gambar)
                                        <img src="{{ Storage::url($buku->gambar) }}" alt="{{ $buku->nama }}" class="img-fluid" style="max-width: 150px; height: auto;">
                                        <p>{{ $buku->gambar }}</p>
                                    @else
                                        Tidak ada gambar
                                    @endif
                                </td>
                                <td><a href="{{ route('buku.show', $buku->id) }}" class="btn btn-info">Show</a></td>
                                <td><a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-info">Edit</a></td>
                                <td>
                                    <form action="{{ route('buku.destroy', $buku->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>


            </div>
        </div>

    @endsection
