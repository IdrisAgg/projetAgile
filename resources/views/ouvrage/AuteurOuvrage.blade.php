@extends('layouts.app')
@section('titre')
Ouvrages d'un auteur
@endsection
@section('content')
<h1 class="mb-5 text-center">Les ouvrages de <span class="fw-lighter" id="nomAuteur">{{$auteur->nom}}  {{$auteur->prenom}}</span>  </h1>
<table class="table container">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">titre</th>
            <th scope="col">auteur</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ouvrages as $unOuvrage)
        <tr>
            <td >{{$unOuvrage->id}}</td>
            <td id="ouvrageTitle" >{{$unOuvrage->titre}}</td>
            <td >{{$unOuvrage->auteur->nom}} {{$unOuvrage->auteur->prenom}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
