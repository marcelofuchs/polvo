@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Novo Produto
                </div>
                <div class="card-body">
                    @if($errors->any())
                    <ul class="alert">
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                    @endif

                    {!! Form::open(['route'=>'product.store', 'method'=>'product']) !!}

                    @include('product._form')

                    <div class="form-group">
                        {!! Form::label('description', 'Descrição', ['class'=>'control-label']) !!}
                        {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                    </div>

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