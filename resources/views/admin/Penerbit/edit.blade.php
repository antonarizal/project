@extends('admin.layouts.main')
@section('title','Penerbit')
@section('content')

<!-- DataTales Example -->
<form method="post" action="{{ route('penerbit.update', $penerbit->id) }}">
    @csrf
    @method('PUT')

<div class="col-md-6">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Penerbit</h6>
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
                    <td>Penerbit</td>
                    <td>
                        <input type="text" class="form-control" name="penerbit" value="{{ $penerbit->penerbit }}">
                    </td>
                </tr>
            </table>
            <input type="submit" class="btn btn-primary">
    </div>
</div>
</div>
</form>


@endsection