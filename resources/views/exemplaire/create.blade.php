@extends('layouts.app')
@section('titre')
    Créer exemplaire
@endsection
@section("content")
@if (count($errors)>0)
<div class="container d-flex justify-content-center">
    <div class=" col-md-4 alert  alert-danger py-3">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
@if (session()->get('unsuccess'))
        <div class="container d-flex justify-content-center">
            <div class=" col-md-4 alert  alert-danger py-3">
                {{ session()->get('unsuccess') }}
            </div>
        </div>
    @endif
    <div class="text-center"><h1>Ajouter un exemplaire</h1></div>
    <div class="container d-flex justify-content-center">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 shadow-lg p-4 bg-body rounded">
            <form action="/createExemplaire" method="POST">
                @csrf
                <div>
                    <label class="form-label " for="titre">Titre</label>
                    <input class="form-control" disabled type="text" id="titre" value="{{$ouvrage->titre}}">
                </div>
                <div>
                    <label class="form-label mt-2" for="auteur">Auteur</label>
                    <input class="form-control" disabled type="text" id="auteur" value="{{$ouvrage->auteur->nom }} {{$ouvrage->auteur->prenom }}">
                </div>
                <div>
                    <label class="form-label mt-2" for="biblio">La biliothèque</label>
                    <select class="form-control" name="idBiblio">
                        <option selected value="{{null}}">-----Séléctionnez la bibliothèque-----</option>
                        @foreach ($biblios as $biblio)
                            <option value="{{$biblio->id}}">{{$biblio->nom}}</option>
                        @endforeach
                        <input type="hidden" name="idOuvrage" value="{{$ouvrage->id}}">
                    </select>
                </div>
                <div class="d-flex justify-content-end mt-2">
                    <button type="submit" class="btn btn-primary px-4 mt-2">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
@endsection