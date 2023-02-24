@extends('layouts.app')
@section('titre')
Ouvrages d'un auteur
@endsection
@section('content')
<?php $numero =0?>
<h1 class="mb-5 text-center">Les ouvrages de <span class="fw-lighter" id="nomAuteur">{{$auteur->nom}}  {{$auteur->prenom}}</span>  </h1>
<table class="table container">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">titre</th>
            <th scope="col">auteur</th>
            <th scope="col">Disponiblité</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ouvrages as $unOuvrage)
        <?php $numero ++?>
        <tr>
            <td >{{$numero}}</td>
            <td id="ouvrageTitle" >{{$unOuvrage->titre}}</td>
            <td >{{$unOuvrage->auteur->nom}} {{$unOuvrage->auteur->prenom}}</td>
            <td class="text-success "><strong><?php $test ="Indisponible"; foreach ($unOuvrage->exemplaires as $exemplaire){ $exemplaire->user_id==null? $test="Disponible": "";}; echo $test; ?></strong></td>
            <td><a id="exemplaire" class="btn btn-primary" href="/exemplaire/{{$unOuvrage->id}}">Exemplaires</a> </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
