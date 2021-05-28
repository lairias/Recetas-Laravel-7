@extends('layouts.app')



@section('styles')
@section('botones')

<a href="{{route('recetas.index')}}" class="btn btn-primary mr-2 text-white ">Volver</a>
@endsection

@section('content')
<h2 class="text-center mb-5">Crear Nueva Receta</h2>

<div class="row justify-content-center mt-5">
  <div class="col-md-8">
    <form method="POST" action="{{route('recetas.store')}}" novalidate>
      @csrf
      <div class="form-group">
        <label for="titulo"></label>
        <input type="text" name="titulo" id="titulo" class="form-control @error('titulo') is-invalid  @enderror " placeholder="Titulo" value="{{ old('titulo') }}" aria-describedby="helpId" />
        <small id="helpId" class="text-muted">Nombre Titulo</small>
        @error('titulo')
        <span class="invalid-feedback d-block" role="alert">
          <strong>{{$message}}</strong>
        </span>
        @enderror
      </div>

      <div class="form-group">
        <label for="categoria">Categoria
        </label>
        <select name="categoria" id="categoria" class="form-control @error('categoria') is-invalid @enderror ">
          <option value="">-- Selecione --</option>
          @foreach($categorias as $id => $categoria)
          <option 
          value="{{$id}}" 
          {{ old('categoria') == $id ? 'selected' : ''}} 
          > {{$categoria}}</option>
          @endforeach
        </select>
        @error('categoria')
        <span class="invalid-feedback d-block" role="alert">
          <strong>{{$message}}</strong>
        </span>
        @enderror
      </div>

      <div class="form-groud">
        <input type="submit" class="btn btn-primary" value="Agregar Receta">
      </div>

    </form>
  </div>

</div>

@endsection