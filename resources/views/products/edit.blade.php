@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="panel-body">
                    <!-- Form-->
                    {!! Form::model($product, ['method'=>'PATCH','class'=>'form-horizontal','action'=>['ProductsController@update', $product->id]]) !!}
                    @include('products.form_errors')
                    @include('products.form',['buttonText'=>'Save'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection