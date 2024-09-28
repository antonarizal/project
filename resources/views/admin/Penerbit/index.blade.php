@extends('admin.layouts.main')
@section('title','Penerbit')
@section('content')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data penerbit</h6>
    </div>
    <div class="card-body">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
        @endif
        <a href="penerbit/create" class="btn btn-primary">Tambah Penerbit</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Penerbit</th>
                        <th>Show</th>
                        <th>Edit</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penerbits as $penerbit)
                    <tr>
                        <td>{{ $penerbit->penerbit }}</td>
                        <td><a href="{{  route('penerbit.show', $penerbit->id) }}" class="btn btn-info">Show</a></td>
                        <td><a href="{{  route('penerbit.edit', $penerbit->id) }}" class="btn btn-info">Edit</a></td>
                        <td>
                            <form action="{{ route('penerbit.destroy', $penerbit->id) }}" method="POST" style="display: inline;">
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