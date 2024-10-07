@extends('admin.layouts.main')
@section('title', 'Buku')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Table Buku</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Tipe</th>
                                <th>Jenjang</th>
                                <th>Mapel</th>
                                <th>Penerbit</th>
                                <th>ISBN</th>
                                <th>Edisi</th>
                                <th>Penulis</th>
                                <th>HET</th>
                                <th>Gambar</th>
                                <th>CreatedAt</th>
                                <th>UpdatedAt</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>NO</th>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Tipe</th>
                                <th>Jenjang</th>
                                <th>Mapel</th>
                                <th>Penerbit</th>
                                <th>ISBN</th>
                                <th>Edisi</th>
                                <th>Penulis</th>
                                <th>HET</th>
                                <th>Gambar</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
@endsection
