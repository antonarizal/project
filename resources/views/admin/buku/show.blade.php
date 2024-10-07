@extends('admin.layouts.main')
@section('title', 'Buku')
@section('content')

    <!-- DataTales Example -->
    <form method="post" action="{{ route('buku.update', $buku->id) }}">
        @csrf
        @method('PUT')

        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Informasi Buku</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td>Judul Buku</td>
                                <td>
                                    {{ $buku->nama }}
                                </td>
                            </tr>
                            <tr>
                                <td>Penulis</td>
                                <td>
                                    {{ $buku->penulis->penulis }}
                                </td>
                            </tr>
                            <tr>
                                <td>Penerbit</td>
                                <td>
                                    {{ $buku->penerbit->penerbit }}
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
                                    {{ $buku->edisi->edisi }}
                                </td>
                            </tr>
                            <tr>
                                <td>Gambar</td>
                                <td>
                                    @if ($buku->gambar)
                                        <img src="{{ Storage::url($buku->gambar) }}" alt="{{ $buku->nama }}"
                                        class="img-fluid" style="max-width: 150px; height: auto;">
                                        <p>{{ $buku->gambar }}</p>
                                    @else
                                        Tidak ada gambar
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
    </form>

@endsection
