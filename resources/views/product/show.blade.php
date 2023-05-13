@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? "{{ __('Show') Product" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card rounded shadow-sm">
                    <div class="card-header text-center">
                        <h3 class="mb-0">{{ __('Show') }} Product</h3>
                    </div>

                    <div class="card-body">
                        <div class="form-group text-center" style="font-size: 18px;">
                            <strong>Descripcion:</strong> {{ $product->descripcion }}
                        </div>
                        <div class="form-group text-center" style="font-size: 18px;">
                            <strong>Precio:</strong> {{ $product->price }}
                        </div>
                        <div class="form-group text-center" style="font-size: 18px;">
                            <strong>Stock:</strong> {{ $product->stock }}
                        </div>
                    </div>

                    <div class="card-footer text-center">
                        <a class="btn btn-primary" href="{{ route('products.index') }}">{{ __('Atras') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
