@extends('admin.master')

@section('content')

<style>
    .table-update {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  
  .table-update td, .table-update th {
    border: 1px solid #ddd;
    padding: 5px;
  }
  
  .table-update tr:nth-child(even){background-color: #f2f2f2;}
  
  .table-update tr:hover {background-color: #ddd;}
  
  .table-update th {
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
  }
</style>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-sm-12">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('daftarUser')}}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard User</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-right">
                            <a href="{{ route('createUser') }}" class="btn btn-primary" role="button">Tambah User</a>
                        </div>
                        <div class="card-body p-0">
                            <table class="table-update table-bordered " id="data-table" style="padding: 50px">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>role</th>
                                        <th>password</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>{{ $user->password }}</td>
                                        <td>
                                            <a href="{{route('editUser', ['id' => $user->id])}}"
                                                class="btn btn-warning btn-sm" role="button">Edit</a>
                                            <a onclick="confirmDelete(this)"
                                                data-url="{{route('deleteUser', ['id' => $user->id])}}"
                                                class="btn btn-danger btn-sm" role="button">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('addCss')
<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection

@push('script')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src=""></script>
<script src="{{ asset('js2/sweetalert.min.js') }}"></script>
<script>
    // $(document).ready( function () {
    //     $('#data-table').DataTable();
    // })
    $(function () {
        $("#data-table").DataTable();
    })


    confirmDelete = function (button) {
        var url = $(button).data('url');
        swal({
            'title': 'Konfirmasi Hapus',
            'text': 'Apakah kamu yakin ingin menghapus data ini?',
            'dangerMode': true,
            'buttons': true
        }).then(function (value) {
            if (value) {
                window.location = url;
            }
        })
    }
</script>
@endpush