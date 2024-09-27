@extends('admin.layouts.main')
@section('title','Edisi')
@section('content')

<!-- DataTales Example -->
<form method="post" action="{{ route('edisi.index') }}">
    @csrf
<div class="col-md-6">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah edisi</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <td>Edisi</td>
                    <td>
                        <input required type="text" class="form-control" name="edisi">
                    </td>
                </tr>
            </table>
            <input type="submit" class="btn btn-primary">
    </div>
</div>
</div>
</form>


@endsection