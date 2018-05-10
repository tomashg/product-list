@extends('layouts.app')
@section('content')
    <div class="row">
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>

        @if($product->prices)
            <p>Net price: {{$product->prices->net_price}}</p>
            <p>Total price: {{$product->prices->total_price}}</p>
        @endif
    </div>
@endsection