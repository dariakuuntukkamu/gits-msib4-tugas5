@extends('app')

@section('content')
<a href="{{url('/product/add/cart')}}">
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-12 col-sm-12 col-12">
                <div class="dropdown">
                    <button class="btn btn-primary " type="button">Pesan Makanan atau Minuman</button>
                    <button type="button" class="btn btn-danger" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> 
                    </button> 
    @foreach ($products as $item)
        <div class="card mt-3">
            <div class="card-body ">
                <div class="card-title">
                    {{ $item->name }}            
                </div>
                <div class="card-text">{{ $item->description}}</div>
        </div>
    </div>
    <button type="button" class="btn btn-success mt-3" data-toggle="dropdown"><i class="fa fa-cart-plus" aria-hidden="true"></i> Masukan keranjang</button>
@endforeach

@endsection
