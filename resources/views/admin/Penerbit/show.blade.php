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
                <h6 class="m-0 font-weight-bold text-primary">Informasi Penerbit</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td>Penerbit</td>
                            <td>
                                {{ $penerbit->penerbit }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
</form>

@endsection