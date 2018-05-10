@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="panel-body">
                    <!-- Formularz -->

                    {!! Form::open(['route'=>'products.store', 'class'=>'form-horizontal']) !!}
                    @include('products.form_errors')
                    @include('products.form', ['buttonText'=>'Add product'])
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection