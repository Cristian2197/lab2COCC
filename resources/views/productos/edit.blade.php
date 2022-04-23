@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Ingreso de Productos') }}</div>
                <div class="card-body">
                    <form method = "post" action = "{{ route('update', $producto)}}">
                        @include('productos.formprods')
                        <div class="modal-footer">
                            <a class="btn btn-secondary" href="{{ route('productos') }}">Cancelar</a>
                            <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
