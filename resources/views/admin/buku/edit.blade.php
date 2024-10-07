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
                    <h6 class="m-0 font-weight-bold text-primary">Edit Buku</h6>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td>Judul Buku</td>
                                <td>
                                    <input required type="text" class="form-control" name="nama"
                                        value="{{ $buku->nama }}">
                                </td>
                            </tr>
                            <tr>
                                <td>Penulis</td>
                                <td>
                                    <select name="penulis_id" id="" class="form-control">
                                        @foreach ($penulis as $penulis)
                                            <option value="{{ $penulis->id }}"
                                                {{ $penulis->penulis_id == $penulis->id ? 'selected' : '' }}>
                                                {{ $penulis->penulis }}</option>
                                        @endforeach

                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Penerbit</td>
                                <td>
                                    <select name="penerbit_id" id="" class="form-control">
                                        @foreach ($penerbit as $penerbit)
                                            <option value="{{ $penerbit->id }}"
                                                {{ $penerbit->penerbit_id == $penerbit->id ? 'selected' : '' }}>
                                                {{ $penerbit->penerbit }}</option>
                                        @endforeach

                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Jenjang</td>
                                <td>
                                    <select name="jenjang_id" id="" class="form-control">
                                        @foreach ($jenjangs as $jenjang)
                                            <option value="{{ $jenjang->id }}"
                                                {{ $jenjang->jenjang_id == $jenjang->id ? 'selected' : '' }}>
                                                {{ $jenjang->jenjang }}</option>
                                        @endforeach

                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Mapel</td>
                                <td>
                                    <select name="mapel_id" id="" class="form-control">
                                        @foreach ($mapels as $mapel)
                                            <option value="{{ $mapel->id }}"
                                                {{ $mapel->mapel_id == $mapel->id ? 'selected' : '' }}>{{ $mapel->mapel }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Tipe</td>
                                <td>
                                    <select name="tipe_id" id="" class="form-control">
                                        @foreach ($tipes as $tipe)
                                            <option value="{{ $tipe->id }}"
                                                {{ $tipe->tipe_id == $tipe->id ? 'selected' : '' }}>{{ $tipe->tipe }}
                                            </option>
                                        @endforeach

                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>ISBN</td>
                                <td>
                                    <input type="text" class="form-control" name="isbn" value="{{ $buku->isbn }}">
                                </td>
                            </tr>
                            <tr>
                                <td>Edisi</td>
                                <td>
                                    <select name="edisi_id" id="" class="form-control">
                                        @foreach ($edisis as $edisi)
                                            <option value="{{ $edisi->id }}"
                                                {{ $edisi->edisi_id == $edisi->id ? 'selected' : '' }}>{{ $edisi->edisi }}
                                            </option>
                                        @endforeach

                                    </select>
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
                                    <input type="file" class="form-control" name="gambar">
                                </td>
                            </tr>
                        </table>
                        <input type="submit" class="btn btn-primary">
                    </div>
                </div>
            </div>
    </form>


@endsection
