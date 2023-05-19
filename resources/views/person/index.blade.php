@extends('layouts.app')

@section('template_title')
    Person
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="m-0">{{ __('Empleados') }}</h5>
                    <div class="d-flex">
                        <a href="{{ route('people.create') }}" class="btn btn-primary me-2">{{ __('Nuevo') }}</a>
                        <a href="{{ url('/personHome') }}" class="btn btn-secondary">{{ __('Regresar') }}</a>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success mb-0">
                        {{ $message }}
                    </div>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{{ __('Nombre') }}</th>
                                    <th scope="col">{{ __('Apellido') }}</th>
                                    <th scope="col">{{ __('Trabajo') }}</th>
                                    <th scope="col">{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($people as $person)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $person->name }}</td>
                                        <td>{{ $person->lastname }}</td>
                                        <td>{{ $person->job }}</td>
                                        <td>
                                            <form action="{{ route('people.destroy', $person->id) }}" method="POST">
                                                <div class="d-flex">
                                                    <a class="btn btn-primary btn-sm me-2" href="{{ route('people.show', $person->id) }}">
                                                        {{ __('Ver') }}
                                                    </a>
                                                    <a class="btn btn-success btn-sm me-2" href="{{ route('people.edit', $person->id) }}">
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
                    <div class="d-flex justify-content-center">
                        {{ $people->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
