@extends('admin.layouts.main')
@section('title', 'Buku')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Table Buku</h1>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <button type="button" class="btn btn-success shadow-sm" data-bs-toggle="modal" data-bs-target="#addBukuModal">
                Tambah Buku
            </button>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th>NO</th>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Tipe</th>
                                <th>Jenjang</th>
                                <th>Mapel</th>
                                <th>Penerbit</th>
                                <th>ISBN</th>
                                <th>Edisi</th>
                                <th>Penulis</th>
                                <th>HET</th>
                                <th>Gambar</th>
                                <th>CreatedAt</th>
                                <th>UpdatedAt</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bukus as $key => $buku)
                                <tr>
                                    <td>
                                        <button type="button" class="btn btn-success shadow-sm" data-bs-toggle="modal"
                                            data-bs-target="#updateBukuModal{{ $buku->id }}">Update</button>
                                        <button type="button" class="btn btn-danger shadow-sm" data-bs-toggle="modal"
                                            data-bs-target="#deleteBukuModal{{ $buku->id }}">Delete</button>
                                    </td>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $buku->id }}</td>
                                    <td>{{ $buku->nama }}</td>
                                    <td>{{ $buku->tipe->tipe }}</td>
                                    <td>{{ $buku->jenjang->jenjang }}</td>
                                    <td>{{ $buku->mapel->mapel }}</td>
                                    <td>{{ $buku->penerbit->penerbit }}</td>
                                    <td>{{ $buku->isbn }}</td>
                                    <td>{{ $buku->edisi->edisi }}</td>
                                    <td>{{ $buku->penulis->penulis }}</td>
                                    <td>{{ $buku->het }}</td>
                                    <td><img src="{{ asset($buku->gambar) }}" width="50" alt="Gambar Buku"></td>
                                    <td>{{ $buku->created_at }}</td>
                                    <td>{{ $buku->updated_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addBukuModal" tabindex="-1" aria-labelledby="addBukuModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addBukuModalLabel">Tambah Buku</h5>
                    <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group row mb-3">
                                    <label for="nama" class="col-12 col-lg-3 fw-bold mb-2 mb-lg-0 label">Judul</label>
                                    <div class="col-12 col-lg-9">
                                        <input type="text" class="form-control" name="nama" id="nama" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="tipe_id" class="col-12 col-lg-3 fw-bold mb-2 mb-lg-0 label">Tipe</label>
                                    <div class="col-12 col-lg-9">
                                        <select class="form-control form-select" name="tipe_id" id="tipe_id" required>
                                            <option value="">Pilih Tipe</option>
                                            @foreach ($tipes as $tipe)
                                                <option value="{{ $tipe->id }}">{{ $tipe->tipe }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="jenjang_id"
                                        class="col-12 col-lg-3 fw-bold mb-2 mb-lg-0 label">Jenjang</label>
                                    <div class="col-12 col-lg-9">
                                        <select class="form-control form-select" name="jenjang_id" id="jenjang_id" required>
                                            <option value="">Pilih Jenjang</option>
                                            @foreach ($jenjangs as $jenjang)
                                                <option value="{{ $jenjang->id }}">{{ $jenjang->jenjang }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="mapel_id" class="col-12 col-lg-3 fw-bold mb-2 mb-lg-0 label">Mapel</label>
                                    <div class="col-12 col-lg-9">
                                        <select class="form-control form-select" name="mapel_id" id="mapel_id" required>
                                            <option value="">Pilih Mapel</option>
                                            @foreach ($mapels as $mapel)
                                                <option value="{{ $mapel->id }}">{{ $mapel->mapel }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="penerbit_id"
                                        class="col-12 col-lg-3 fw-bold mb-2 mb-lg-0 label">Penerbit</label>
                                    <div class="col-12 col-lg-9">
                                        <select class="form-control form-select" name="penerbit_id" id="penerbit_id"
                                            required>
                                            <option value="">Pilih Penerbit</option>
                                            @foreach ($penerbits as $penerbit)
                                                <option value="{{ $penerbit->id }}">{{ $penerbit->penerbit }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group row mb-3">
                                    <label for="isbn" class="col-12 col-lg-3 fw-bold mb-2 mb-lg-0 label">ISBN</label>
                                    <div class="col-12 col-lg-9">
                                        <input type="text" class="form-control" name="isbn" id="isbn" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="edisi_id" class="col-12 col-lg-3 fw-bold mb-2 mb-lg-0 label">Edisi</label>
                                    <div class="col-12 col-lg-9">
                                        <select class="form-control form-select" name="edisi_id" id="edisi_id" required>
                                            <option value="">Pilih Edisi</option>
                                            @foreach ($edisis as $edisi)
                                                <option value="{{ $edisi->id }}">{{ $edisi->edisi }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="penulis_id"
                                        class="col-12 col-lg-3 fw-bold mb-2 mb-lg-0 label">Penulis</label>
                                    <div class="col-12 col-lg-9">
                                        <select class="form-control form-select" name="penulis_id" id="penulis_id"
                                            required>
                                            <option value="">Pilih Penulis</option>
                                            @foreach ($penuliss as $penulis)
                                                <option value="{{ $penulis->id }}">{{ $penulis->penulis }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="het" class="col-12 col-lg-3 fw-bold mb-2 mb-lg-0 label">HET</label>
                                    <div class="col-12 col-lg-9">
                                        <input type="number" class="form-control" name="het" id="het"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="gambar"
                                        class="col-12 col-lg-3 fw-bold mb-2 mb-lg-0 label">Gambar</label>
                                    <div class="col-12 col-lg-9">
                                        <input type="file" class="form-control" name="gambar" id="gambar"
                                            accept="image/*">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @foreach ($bukus as $buku)
        <div class="modal fade" id="deleteBukuModal{{ $buku->id }}" tabindex="-1"
            aria-labelledby="deleteBukuModalLabel{{ $buku->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteBukuModalLabel{{ $buku->id }}">Hapus Buku</h5>
                        <button type="button" class="btn" data-bs-dismiss="modal"
                            aria-label="Close">&times;</button>
                    </div>
                    <div class="modal-body">
                        Apakah kamu yakin ingin menghapus buku <strong>{{ $buku->nama }}</strong>?
                    </div>
                    <div class="modal-footer">
                        <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
