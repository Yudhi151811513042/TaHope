@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="orders">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Tambah User</strong>
                            @if(session('status'))
                                <div class="sufee-alert alert with-close alert-secondary alert-dismissible fade show">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID User</th>
                                        <th>Nama User</th>
                                        <th>Role</th>
                                        <th>Email</th>
                                        <th style="text-align:center;">Action</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        <tr>
                                        @foreach($user as $usr)
                                            <td>{{ $usr->id }}</td>
                                            <td>{{ $usr->name }}</td>
                                            <td>{{ $usr->role }}</td>
                                            <td>{{ $usr->email }}</td>
                                            <td style="text-align:center;">
                                                <a href="" class="btn btn-info btn-sm">
                                                    <i class="fa fa-picture-o"></i>
                                                </a>
                                                <a href="" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form action="#" method="post" class="d-inline">
                                                    @method('delete')
                                                    <button class="btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach 
                                    </tbody>
                                </table>
                                {{ $user->links() }}
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>


@endsection