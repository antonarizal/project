@extends('layouts.app')
@section('title','Barang')
@section('content')

<!-- DataTales Example -->
<form method="post" action="{{ route('buku.update', $buku->id) }}">
    @csrf
    @method('PUT')

    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Buku</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td>Judul Buku</td>
                            <td>
                                {{ $buku->judul }}
                            </td>
                        </tr>
                        <tr>
                            <td>Penulis</td>
                            <td>
                                {{ $buku->penulis->nama }}
                            </td>
                        </tr>
                        <tr>
                            <td>Jenjang</td>
                            <td>
                                {{ $buku->jenjang->jenjang }}
                            </td>
                        </tr>
                        <tr>
                            <td>Mapel</td>
                            <td>
                                {{ $buku->mapel->mapel }}
                            </td>
                        </tr>
                        <tr>
                            <td>Tipe</td>
                            <td>
                                {{ $buku->tipe->tipe }}
                            </td>
                        </tr>
                        <tr>
                            <td>ISBN</td>
                            <td>
                                {{ $buku->isbn }}
                            </td>
                        </tr>
                        <tr>
                            <td>Edisi</td>
                            <td>
                                {{ $buku->edisi }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
</form>

@endsection
