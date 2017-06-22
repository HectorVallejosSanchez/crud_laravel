@extends('layout')

@section('content')

    <div class="col-sm-8">
        <h2>
            Editar Producto
            <a href="{{ route('products.index') }}" class="btn btn-primary pull-right">Listado</a>
        </h2>

        @include('products.partials.error')
        {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT']) !!}
            @include('products.partials.form')
        {!! Form::close() !!}
    </div>
    <div class="col-sm-4">
        @include('products.partials.aside')
    </div>
@endsection