@extends('layouts.app')

@section('template_title')
    Product
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <h5 class="m-0">{{ __('Productos') }}</h5>
                            <div class="d-flex">
                                <a href="{{ route('products.create') }}" class="btn btn-primary me-2">{{ __('Nuevo') }}</a>
                                <a href="{{ url('/home') }}" class="btn btn-secondary">{{ __('Regresar') }}</a>
                            </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">{{ __('Descripcion') }}</th>
                                        <th scope="col">{{ __('Precio') }}</th>
                                        <th scope="col">{{ __('Stock') }}</th>
                                        <th scope="col">{{ __('Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $product->descripcion }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->stock }}</td>
                                            <td>
                                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                    <div class="d-flex">
                                                        <a class="btn btn-primary btn-sm me-2" href="{{ route('products.show', $product->id) }}">
                                                            {{ __('Ver') }}
                                                        </a>
                                                        <a class="btn btn-success btn-sm me-2" href="{{ route('products.edit', $product->id) }}">
                                                            {{ __('Edit') }}
                                                        </a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('{{ __('Estas seguro de eliminar este item?') }}')">
                                                            {{ __('Borrar') }}
                                                        </button>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
                {!! $products->links() !!}
            </div>
        </div>
    </div>
@endsection

