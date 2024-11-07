@extends('layouts.app')
@section('title','Barang')
@section('content')

<!-- DataTales Example -->
<form method="post" action="{{ route('buku.index') }}" enctype="multipart/form-data">
    @csrf
<div class="col-md-6">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Buku</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <td>Judul Buku</td>
                    <td>
                        <input required type="text" class="form-control" name="judul">
                    </td>
                </tr>
                <tr>
                    <td>Penulis</td>
                    <td>
                        <select name="penulis_id" id="" class="form-control">
                            @foreach ($penulis as $author)
                            <option value="{{ $author->id }}">{{ $author->nama }}</option>

                            @endforeach

                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jenjang</td>
                    <td>
                        <select name="jenjang_id" id="" class="form-control">
                            @foreach ($jenjangs as $jenjang)
                            <option value="{{ $jenjang->id }}">{{ $jenjang->jenjang }}</option>

                            @endforeach

                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jenjang</td>
                    <td>
                        <select name="mapel_id" id="" class="form-control">
                            @foreach ($mapels as $mapel)
                            <option value="{{ $mapel->id }}">{{ $mapel->mapel }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tipe</td>
                    <td>
                        <select name="tipe_id" id="" class="form-control">
                            @foreach ($tipes as $tipe)
                            <option value="{{ $tipe->id }}">{{ $tipe->tipe }}</option>

                            @endforeach

                        </select>
                    </td>
                </tr>
                <tr>
                    <td>ISBN</td>
                    <td>
                        <input type="text" class="form-control" name="isbn">
                    </td>
                </tr>
                <tr>
                    <td>Edisi</td>
                    <td>
                        <input type="text" class="form-control" name="edisi">
                    </td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td>
                        <input type="file" name="gambar" id="gambar">
                    </td>
                </tr>
            </table>
            <input type="submit" class="btn btn-primary">
    </div>
</div>
</div>
</form>


@endsection
