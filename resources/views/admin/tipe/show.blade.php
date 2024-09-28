@extends('admin.layouts.main')
@section('title','Tipe')
@section('content')

<!-- DataTales Example -->
<form method="post" action="{{ route('tipe.update', $tipe->id) }}">
    @csrf
    @method('PUT')

    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Informasi Tipe</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td>Tipe</td>
                            <td>
                                {{ $tipe->tipe }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
</form>

@endsection