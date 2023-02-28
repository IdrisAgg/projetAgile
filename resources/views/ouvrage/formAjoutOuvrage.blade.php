@extends('layouts.app')
@section('content')
<?php $numero =0?>
<div class="container ">
    <h1 class="mb-5 text-center">Ajouter un ouvrage </h1>
    <form method="POST" action="/ouvrage" class="col-3 mx-auto">
        @csrf
        <div class="mb-3">
          <label class="form-label">Titre de l'ouvrage</label>
          <input name="titre" type="text" class="form-control" >
        </div>
        <div class="mb-3">
          <label class="form-label">Choisissez l'auteur</label>
          <select name="auteurChoisi" class="form-select" aria-label="Default select example">
            <option selected>Ouvrez le menu</option>
            @foreach ($auteurs as $auteur)
                <option value="{{$auteur->nom}}">{{$auteur->nom}}</option>
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
