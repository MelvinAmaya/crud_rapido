@extends('layouts.app')

@section('template_title')
{{ $person->name ?? "{{ __('Show') Person" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card rounded shadow-sm">
                    <div class="card-header text-center">
                        <h3 class="mb-0">{{ __('Show') }} Empleado</h3>
                    </div>

                    <div class="card-body">
                        <div class="form-group text-center" style="font-size: 18px;">
                            <strong>{{ __('Nombre') }}:</strong> {{ $person->name }}
                        </div>
                        <div class="form-group text-center" style="font-size: 18px;">
                            <strong>{{ __('Apellido') }}:</strong> {{ $person->lastname }}
                        </div>
                        <div class="form-group text-center" style="font-size: 18px;">
                            <strong>{{ __('Trabajo') }}:</strong> {{ $person->job }}
                        </div>
                    </div>

                    <div class="card-footer text-center">
                        <a class="btn btn-primary" href="{{ route('people.index') }}"> {{ __('Atras') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
