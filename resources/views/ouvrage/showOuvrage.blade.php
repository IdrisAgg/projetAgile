@extends('layouts.app')
@section('content')
<?php $numero =0?>
    @if (session()->get('success'))
        <div class="container d-flex justify-content-center">
            <div class=" col-md-4 alert  alert-success py-3 text-center">
                {{ session()->get('success') }}
            </div>
        </div>
    @endif
    <h1 class="mb-5 text-center">Les ouvrages </h1>
    <nav class="navbar bg-body-tertiary ">
        <div class="container d-flex justify-content-end">
            <a class="btn btn-success mx-5" href="/ouvrage/create"> + Ajouter un ouvrage </a>
            <form method="GET" action="/searchOuvrage" class="d-flex" role="search">
                @csrf
                <input name="keywords" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
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
            <?php $numero ++?>
            <tr>
                <td >{{$numero}}</td>
                <td >{{$unOuvrage->titre}}</td>
                <td id="lienAuteur"><a href="listerParAuteur/{{$unOuvrage->auteur_id}}">{{$unOuvrage->auteur->nom}} {{$unOuvrage->auteur->prenom}}</a></td>
                <td><a id="exemplaire" class="btn btn-primary" href="/exemplaire/{{$unOuvrage->id}}">Exemplaires</a> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
