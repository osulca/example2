@extends("layouts.app")

@section("content")
<div class="container">
<h1>Registro de Usuarios</h1>
<form method="post" action="guardar">
    @csrf
    <input @error('nombres') style="border: 1px solid red" @enderror class="form-control mb-3" type="text" name="nombres" placeholder="Ingrese nombres" />
    @error('nombres')
        <div class="text-danger mb-3">* {{ $message }}</div>
    @enderror
    <input class="form-control mb-3" type="text" name="apellidos" placeholder="Ingrese apellidos" />
    @error('apellidos')
        <div class="text-danger mb-3">* {{ $message }}</div>
    @enderror
    <input class="form-control mb-3" type="text" name="direccion" placeholder="Ingrese direccion" />
    <input class="btn btn-primary" type="submit" value="Guardar" />
</form>
<br>
<!--
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
</div>
@endsection
