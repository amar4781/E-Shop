@extends('admin')

@section('content')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Add New Product</title>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add New Product
                        <a href="{{url('products')}}" class="btn btn-danger float-end"><< BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{Route('products.store')}}" method="POST" class="p-3 border" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title">Name :</label>
                            <input type="text" name="name" id="title" value="{{ old('name') }}" class="form-control"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                        </div>
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="body">Details :</label>
                            <input type="text" name="details" id="body" value="{{ old('details') }}" class="form-control"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                        </div>
                        @error('details')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="body">Description :</label>
                            <input type="text" name="description" id="body" value="{{ old('description') }}" class="form-control"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                        </div>
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="body">Brand :</label>
                            <input type="text" name="brand" id="body" value="{{ old('brand') }}" class="form-control"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                        </div>
                        @error('brand')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="body">Movement :</label>
                            <input type="text" name="movement" id="body" value="{{ old('movement') }}" class="form-control"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                        </div>
                        @error('movement')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="body">Price :</label>
                            <input type="number" name="price" id="body" value="{{ old('price') }}" class="form-control"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                        </div>
                        @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="body">Image :</label>
                            <input type="file" name="image" id="body" value="" class="form-control"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                        </div>
                        @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="body">Upload Images :</label>
                            <input type="file" name="images[]" id="body" value="" class="form-control"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" multiple>
                        </div>
                        @error('images[]')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="body">Gender :</label><br>
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">male</label><br>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">female</label><br>
                        </div>
                        @error('gender')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="body">Size :</label>
                            <input type="number" name="size" id="body" value="{{ old('size') }}" class="form-control"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                        </div>
                        @error('size')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        </div>

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
