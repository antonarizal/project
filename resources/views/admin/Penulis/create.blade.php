@extends('admin.layouts.main')
@section('title','Penulis')
@section('content')

<!-- DataTales Example -->
<form method="post" action="{{ route('penulis.index') }}">
    @csrf
<div class="col-md-6">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Penulis</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <td>Penulis</td>
                    <td>
                        <input required type="text" class="form-control" name="penulis">
                    </td>
                </tr>
            </table>
            <input type="submit" class="btn btn-primary">
    </div>
</div>
</div>
</form>


@endsection