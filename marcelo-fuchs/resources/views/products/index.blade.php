@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Produtos</div>
                <div class="card-body">
                    <a href="{{route('product.create')}}" class="btn btn-primary">Novo Produto</a>
                    <br>
                    <br>
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>SKU</th>
                            <th>Nome</th>
                            <th>Preço</th>
                            <th>Descricao</th>
                        </tr>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->sku}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->description}}</td>
                            <td>
                                <a href="{{route('product.edit',['id'=>$product->id])}}" class="btn btn-default">Editar</a>
                                <a href="{{route('product.destroy',['id'=>$product->id])}}" class="btn btn-danger">Excluir</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>                 
                </div>
            </div>
        </div>
    </div>
</div>

{!!$products->render()!!}
@stop