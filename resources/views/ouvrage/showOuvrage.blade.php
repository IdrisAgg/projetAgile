
@extends('layouts.app')

@section('content')

    <h1 class="mb-5 text-center">Les ouvrages </h1>
    <nav class="navbar bg-body-tertiary ">
        <div class="container d-flex justify-content-end">
            <form method="GET" action="/searchOuvrage/{}" class="d-flex" role="search">
                <input name="keyword" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
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
            <tr>
                <td >{{$unOuvrage->id}}</td>
                <td >{{$unOuvrage->titre}}</td>
                <td id="lienAuteur"><a href="listerParAuteur/{{$unOuvrage->auteur_id}}">{{$unOuvrage->auteur->nom}} {{$unOuvrage->auteur->prenom}}</a></td>
                <td><a id="exemplaire" class="btn btn-primary" href="/exemplaire/{{$unOuvrage->id}}">Exemplaires</a> </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
