<div class="form-group">
    <div class="col-md-4 control-label">
        {!! Form::label('name', 'Name:') !!}
    </div>
    <div class="col-md-6">
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 control-label">
        {!! Form::label('description', 'Description:') !!}
    </div>
    <div class="col-md-6">
        {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 control-label">
        {!! Form::label('net_price', 'Net price') !!}
    </div>
    <div class="col-md-6">
        {!! Form::number('net_price', isset($product) ? $product->prices->net_price : null,  ['class'=>'form-control', 'step'=>'0.01']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 control-label">
        {!! Form::label('total_price', 'Total price:') !!}
    </div>
    <div class="col-md-6">
        {!! Form::number('total_price', isset($product) ? $product->prices->total_price : null,  ['class'=>'form-control', 'step'=>'0.01']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::submit($buttonText,['class'=>'btn btn-primary']) !!}
    </div>
</div>