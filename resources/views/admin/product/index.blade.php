@extends('layouts.admin')
@section('title', $title)
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Create Products
        </div>
        <div class="card-body">
            @if($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="name" value="{{ old('name') }}" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Price:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="price" value="{{ old('price') }}" type="number" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Image:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input class="form-control" type="file" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        &nbsp;
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description
                        <textarea class="form-control" name="description" rows="3">{{ old('description') }}</textarea>
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Manage Products
            @if($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead>
                <tr>
                    <th scope="col" class="w-12">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col" class="w-25">Edit</th>
                    <th scope="col" class="w-25">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->ID() }}</td>
                        <td>{{ $product->name() }}</td>
                        <td>
                            <a class="btn btn-success" href="{{route('admin.product.edit', $product->ID())}}">
                                <img src="{{ asset('/icons/pen.svg') }}"  alt="">
                            </a></td>
                        <td>
                            <form action="{{ route('admin.product.delete', $product->ID()) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">
                                    <img src="{{ asset('/icons/trash-fill.svg') }}" alt="">
                                </button>
                            </form>
                            <form action="/" method="post">
                                <input type="hidden" name="" id="" >
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection