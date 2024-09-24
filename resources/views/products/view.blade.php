@extends('admin')

@section('content')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>View Product</title>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>View Product
                        <a href="{{url('products')}}" class="btn btn-danger float-end"><< BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="#" method="POST" class="p-3 border" enctype="multipart/form-data">
                        @csrf
{{--                        @method('PUT')--}}
                        <div class="mb-3">
                            <label for="title">Name :</label>
                            <input type="text" name="name" id="title" value="{{$product->name}}" class="form-control"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="body">Details :</label>
                            <input type="text" name="details" id="body" value="{{$product->details}}" class="form-control"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="body">Description :</label>
                            <input type="text" name="description" id="body" value="{{$product->description}}" class="form-control"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="body">Brand :</label>
                            <input type="text" name="brand" id="body" value="{{$product->brand}}" class="form-control"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="body">Movement :</label>
                            <input type="text" name="movement" id="body" value="{{$product->movement}}" class="form-control"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="body">Price :</label>
                            <input type="number" name="price" id="body" value="{{$product->price}}" class="form-control"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="body">Image :</label><br>
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" width="100">
                        </div>

                        <div class="mb-3">
                            <label for="body">Gallery :</label><br>
                            @foreach($product->images as $image)
                                <img src="{{ asset('storage/' . $image->image_path) }}" alt="Product Image" width="100">
                            @endforeach
                        </div>

                        <div class="mb-3">
                            <label for="body">Gender :</label><br>
                            <input type="text" name="size" id="body" value="{{$product->gender}}"  class="form-control"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="body">Size :</label>
                            <input type="number" name="size" id="body" value="{{$product->size}}" class="form-control"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" disabled>
                        </div>
{{--                        <div class="mb-3">--}}
{{--                            <button type="submit" name="submit" class="btn btn-success">Submit</button>--}}
{{--                        </div>--}}

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection
