@extends('admin.layouts.main')
@section('title','Penulis')
@section('content')

<!-- DataTales Example -->
<form method="post" action="{{ route('penulis.update', $penulis->id) }}">
    @csrf
    @method('PUT')

    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Informasi Penulis</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td>Penulis</td>
                            <td>
                                {{ $penulis->penulis }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
</form>

@endsection