@extends('admin.layouts.main')
@section('title','Jenjang')
@section('content')

<!-- DataTales Example -->
<form method="post" action="{{ route('jenjang.update', $jenjang->id) }}">
    @csrf
    @method('PUT')

<div class="col-md-6">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Jenjang</h6>
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
                    <td>Jenjang</td>
                    <td>
                        <input type="text" class="form-control" name="jenjang" value="{{ $jenjang->jenjang }}">
                    </td>
                </tr>
            </table>
            <input type="submit" class="btn btn-primary">
    </div>
</div>
</div>
</form>


@endsection