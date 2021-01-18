@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="orders">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Kategori Product</h4>
                            <form action="{{url('/category/create')}}" method="post">
                            {{csrf_field()}}
                                <button type="button" class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#smallmodal">
                                <i class="fa fa-plus"></i>
                                </button>
                            </form>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="smallmodalLabel">Tambah Kategori</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"><i class="fa fa-close"></i></span> 
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ url('/category') }}" method="post">
                                        {{csrf_field()}}
                                            <div class="form-group">
                                                <label>Nama Kategori</label>
                                                <input name="nama_category" type="text" class="form-control" placeholder="Nama Kategori">
                                            </div>      
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name Kategori</th>
                                        <th style="text-align:center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $cat)
                                    <tr>
                                        <td>{{$cat->id_category}}</td>
                                        <td>{{$cat->nama_category}}</td>
                                        <td style="text-align:center">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection