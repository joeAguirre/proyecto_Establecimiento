@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-4 text-center">Este es el formulario</h1>
    </div>

    <div class="mt-5 row justify-content-center">
        <form action="" class="col-md-9 col-xs-12 card card-body">
            <fieldset class="border p-4">
                <legend class="text-info text-center">Nombre, Categoria y Imagen Principal</legend>
                <div class="form-group">
                    <label for="nombre">Nombre Establecimiento</label>
                    <input type="text" id="nombre" class="form-control" name="nombre"
                    @error('nombre') is-invalid @enderror placeholder="ingresa el nombre del establecimiento" value="{{ old('nombre') }}">

                    @error('nombre')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group mt-4">
                    <label for="categoria">Seleccione la categoria de su establecimiento</label>
                    <select class="form-control" @error('categoria')@enderror name="categoria" id="categoria">
                        <option disable selected>--Seleccione la categoria</option>

                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}" {{ old('categoria') === $categoria->id ? 'selected' : ''}}>{{ $categoria->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="imagen_principal">Imagen Principal</label>
                    <input type="file" id="imagen_principal" class="form-control" name="imagen_principal"
                    @error('imagen_principal') is-invalid @enderror
                    value="{{ old('nombre') }}">

                    @error('imagen_principal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </fieldset>

            <fieldset>
                <legend>Ubicacion</legend>

                <div class="form-group">
                    <label for="form_buscador">Direccion de Establecimiento</label>
                    <input type="text" id="form_buscador" class="form-control" name="form_buscador"
                    placeholder="Calle del Establecimiento" value="{{ old('nombre') }}">

                    <p class="text-secondary mt-5 mb-3 text-center">La ubicacion es aproximada mueva el pin al lugar correcto</p>
                </div>
            </fieldset>
        </form>

        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur architecto odio aliquam saepe, quas possimus eius laborum modi aperiam, quae necessitatibus omnis assumenda corporis quam quod veritatis maiores, dicta vero.
        </p>
    </div>
@endsection
