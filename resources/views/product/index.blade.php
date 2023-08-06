@extends('layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)
@section('content')
        <div class="row p-2">
    @foreach($products as $product)
            <div class="col-md-4 col-lg-3 mb-2">
                <div class="card">
                    <img src="{{ asset('/storage/img/'.$product->image) }}" class="card-img-top img-card" alt="">
                    <div class="card-body text-center">
                        <a href="{{ route('product.show', ['id'=> $product->id]) }}"
                           class="btn bg-primary text-white">{{ $product->name }}</a>
                    </div>
                </div>
            </div>
    @endforeach
        </div>
@endsection