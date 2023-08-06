@extends('layouts.app')
@section('title', $title)
@section('content')
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/product01.png') }}" class="img-fluid rounded" alt="">
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/product02.png') }}" class="img-fluid rounded" alt="">
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/product06.png') }}" class="img-fluid rounded" alt="">
        </div>
    </div>
@endsection