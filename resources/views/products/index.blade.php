@extends('admin')

@section('content')
    <!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Product Details</title>
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Product Details
                        <a href="{{url('products/create')}}" class="btn btn-primary float-end">Add Product</a>
{{--                        <a href="{{Route('products.delete.all')}}" class="btn btn-danger float-end me-2 ">Delete All</a>--}}
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Details</th>
                            <th>Description</th>
                            <th>Brand</th>
                            <th>Movement</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Gallery</th>
                            <th>Gender</th>
                            <th>Size</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Modifications</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->details}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->brand}}</td>
                                <td>{{$product->movement}}</td>
                                <td>{{$product->price}}</td>
                                <td><img src="{{ asset($product->image) }}" alt="{{ $product->name }}" width="100"></td>
                                <td>
                                    @foreach($product->images as $image)
                                        <img src="{{ asset('storage/' . $image->image_path) }}" alt="Product Image" width="100">
                                    @endforeach
                                </td>
                                <td>{{$product->gender}}</td>
                                <td>{{$product->size}}</td>
                                <td>{{$product->created_at}}</td>
                                <td>{{$product->updated_at}}</td>
                                <td style="display: inline-grid; width: 100%;">
                                    <a href="{{Route('products.view',$product->id)}}" style="-webkit-fill-available; margin: 3px auto; width: 100%; padding: 0 4px;" class="btn btn-info btn-sm">View</a>
                                    <a href="{{Route('products.edit',$product->id)}}" style="-webkit-fill-available; margin: 3px auto; width: 100%; padding: 0 4px;" class="btn btn-primary btn-sm">Edit</a>

                                    <form style="display: inline-block; width: 100%;" action="{{Route('products.destroy',$product->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button style="-webkit-fill-available; margin: 3px auto; width: 100%; padding: 0 4px; " type="submit" class="btn btn-danger btn-sm">Delete</button>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

@endsection
