<head><link rel="icon" type="image/png" href="../admin/img/logg.png">
    <title>Sotuchauf</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  
</head>
@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Product</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-product')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select form-select-md" name="cate_id" >
                            <option value="">Select a Category</option>
                            @foreach ($category as $item)
                            <option value="{{ $item->id }}">{{$item->name}}</option>

                            @endforeach
                          </select>        
                                    </div>
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Small Description</label>
                    <textarea name="description" rows="3"  class="form-control" ></textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for=""> Description</label>
                    <textarea name="description" rows="3"  class="form-control" ></textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Original Price</label>
                    <input type="number"  name="original_price"  class="form-control" >
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Selling Price</label>
                    <input type="number"  name="selling_price"  class="form-control" >
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Tax</label>
                    <input type="number" name="tax"  class="form-control" >
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Quantity</label>
                    <input type="number" name="qty"  class="form-control" >
                </div><div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" name="status">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Trending</label>
                    <input type="checkbox" name="trending">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Title</label>
                    <textarea rows="3" class="form-control" name="meta_title"></textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea rows="3" class="form-control" name="meta_keywords"></textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Description</label>
                    <input type="text" class="form-control" name="meta_descrip">
                </div>
                <div class="col-md-12">
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </div>
                
            </div>
            </form>
        </div>
    </div>
@endsection