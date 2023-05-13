@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-dark rounded-lg shadow-lg">
                <div class="card-header text-center"><h4>{{ __('Dashboard') }}</h4></div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5>{{ __('¡Estás logeado!') }}</h5>
                    <br>
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg mx-2"  data-placement="left">
                        {{ __('CRUD Producto') }}
                      </a>
                      <a href="{{ route('people.index') }}" class="btn btn-primary btn-lg mx-2"  data-placement="left">
                        {{ __('CRUD Persona') }}
                      </a>
                      <br><br>
                      <p>{{ __('Alumnos: Melvin Pereira, Melvin Vásquez') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
