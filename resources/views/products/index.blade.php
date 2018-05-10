@extends('layouts.app')
@section('content')
    <div class="row">
        @if ($sucessAlert = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $sucessAlert }}</p>
            </div>
        @endif
        @if(count($products))
            <table class="table table-hover">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Net Price</th>
                    <th>Total Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>

                @foreach($products as $product)
                    <tr>
                        <td><a href="{{ url('products', $product->id) }}">{{ $product->name }}</a></td>
                        <td>{{ str_limit($product->description, $limit=15) }}</td>
                        @if($product->prices)
                            <td>{{$product->prices->net_price}}</td>
                            <td>{{$product->prices->total_price}}</td>
                        @endif
                        <td><a class="btn btn-info" href="{{route('products.edit',$product)}}">Edit</a></td>

                        <td>{!! Form::model($product, ['route' => ['products.destroy', $product], 'method' => 'DELETE']) !!}
                            <button class="btn btn-danger">Delete</button></td>
                        {!! Form::close() !!}
                    </tr>
                @endforeach

            </table>
        @endif
    </div>
    <div class="row text-center">
        {{ $products->links() }}
    </div>
    <div class="row text-center">
        <a class="btn btn-primary" href="{{route('products.create')}}">Add new product</a>
    </div>
@endsection