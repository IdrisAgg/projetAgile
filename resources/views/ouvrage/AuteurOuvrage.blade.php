@extends('layouts.app')
@section('titre')
Ouvrages d'un auteur
@endsection
@section('content')
<h1 class="mb-5 text-center">Les ouvrages de <span class="fw-lighter">{{$auteur->nom}}  {{$auteur->prenom}}</span>  </h1>
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
            <td >{{$unOuvrage->titre}}</td>
            <td >{{$unOuvrage->auteur->nom}} {{$unOuvrage->auteur->prenom}}</td>

        </tr>
        @endforeach
    </tbody>
</table>

@endsection
