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
                <h6 class="m-0 font-weight-bold text-primary">Informasi Jenjang</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td>Jenjang</td>
                            <td>
                                {{ $jenjang->jenjang }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
</form>

@endsection