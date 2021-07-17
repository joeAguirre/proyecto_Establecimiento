@extends('layouts.app')

@section('css')
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""/>
@endsection



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

                <div id="mapa" style="height: 400px">

                </div>

                <p>Confirmar que los siguientes campos son correctos</p>

                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input id="direccion" name="direccion" class="form-control
                    @error('direccion') is-invalid @enderror" type="text" placeholder="Escribe tu direccion"
                    value={{ old('direccion') }}>

                    @error('direccion')
                        $message
                    @enderror
                </div>

                <div class="form-group">
                    <label for="barrio">Barrio</label>
                    <input id="barrio" name="barrio" class="form-control
                    @error('barrio') is-invalid @enderror" type="text" placeholder="Escribe tu barrio"
                    value={{ old('barrio') }}>

                    @error('direccion')
                        $message
                    @enderror
                </div>

                <input type="hidden" name="lat" value="{{ old('lat') }}">
                <input type="hidden" name="lng" value="{{ old('lng') }}">
            </fieldset>
        </form>

    </div>


@endsection

@section('js')
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
crossorigin=""></script>
@endsection
