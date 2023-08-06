@extends('layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)
@section('content')
    <div class="card m-1 my-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img alt="" src="{{ asset('/storage/img/'.$product->image) }}" class="object-fit-contain ratio ratio-1x1">
            </div>
            <div class="col-md-8">
                <div class="card-body bg-body-secondary h-100">
                    <h5 class="card-title">
                        {{ $product->name }} (${{ $product->price }})
                    </h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <button class="btn btn-success"><small class="">Add to Cart</small></button>
                </div>
            </div>
        </div>
    </div>
@endsection