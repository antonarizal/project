@extends('admin.layouts.main')
@section('title','Tipe')
@section('content')

<!-- DataTales Example -->
<form method="post" action="{{ route('tipe.index') }}">
    @csrf
<div class="col-md-6">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Tipe</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <td>Tipe</td>
                    <td>
                        <input required type="text" class="form-control" name="tipe">
                    </td>
                </tr>
            </table>
            <input type="submit" class="btn btn-primary">
    </div>
</div>
</div>
</form>


@endsection