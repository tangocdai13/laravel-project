@extends('layouts.admin')

@section('title', 'Order')

@section('content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12 d-flex">
                <div class="card card-table flex-fill">
                    <div class="card-header">
                        <h4 class="card-title float-start">Danh sách Order</h4>
                        <div class="table-search float-end">
                            <input type="text" class="form-control" placeholder="Search">
                            <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="card-header">
                        <a href="{{ route('admin.order.create') }}" class="btn btn-primary" >Create Order</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">gender</th>
                                <th scope="col">hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>
                                    <a class="btn btn-info">Edit</a>
                                    <a class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
