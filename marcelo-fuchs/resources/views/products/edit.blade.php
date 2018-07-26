@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Produto: {{$product->name}}</div>
                <div class="card-body">
                    @if($errors->any())
                    <ul class="alert">
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                    @endif

                    {!! Form::model($product ,['route'=>['product.update',$product->id], 'method'=>'put']) !!}

                    @include('products._form')

                    <div class="form-group">
                        {!! Form::submit('Gravar Produto', ['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop