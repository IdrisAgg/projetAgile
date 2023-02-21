@extends('layouts.app')

@section('content')

    <h1 class="mb-5 text-center">Rechercher un ouvrage par mots clés</h1>

    <nav class="navbar bg-body-tertiary ">
        <div class="container d-flex justify-content-end">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>


    <table class="table container">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">titre</th>
                <th scope="col">auteur_id</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ouvrages as $unOuvrage)
            <tr>
                <th >{{$unOuvrage["id"]}}</th>
                <th >{{$unOuvrage["titre"]}}</th>
                <th >{{$unOuvrage["auteur_id"]}}</th>

            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
