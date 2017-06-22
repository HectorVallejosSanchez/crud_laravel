@extends('layout')

@section('content')

    <div class="col-sm-8">
        <h2>
            {{ $product -> name }}
            <a href="#" class="btn btn-primary pull-right" style="margin-left: 10px;">Editar</a>
            <a href="{{ route('products.index') }}" class="btn btn-default pull-right">Atras</a>
        </h2>
        <p>{{ $product->short }}</p>

        {!! $product->body !!}
    </div>
    <div class="col-sm-4">
        @include('products.partials.aside')
    </div>
@endsection