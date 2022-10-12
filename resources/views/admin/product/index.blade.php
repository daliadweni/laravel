<head><link rel="icon" type="image/png" href="../admin/img/logg.png">
    <title>Sotuchauf</title>
</head>
@extends('layouts.admin')
@section('content')
    <div class="card">
            <div class="card-header">
                <h4>Product page</h4>
                <hr>
            </div>
        <div class="card-body">
            <table class="table table-bordered table-striped" >
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ( $product as $item)
                    <tr>
                        <td>{{ $item ->id}}</td>
                        <td>{{ $item ->name}}</td>
                        <td>{{ $item ->description}}</td>
                        <td>
                            <img src="{{ asset('assets/uploads/products/' .$item ->image)}}" class="cate-image " alt="Image here"> </td>
                        <td>
                           <a href="{{ url('edit-prod/'.$item->id)}}"  class="btn btn-primary">Edit</a>
                            <form action="{{ url('delete-product', $item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                         </td>

                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
@endsection