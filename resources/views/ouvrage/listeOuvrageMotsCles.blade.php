
@extends('layouts.app')

@section('content')

    <h1 class="mb-5 text-center">Les ouvrages par mots clés </h1>

    <nav class="navbar bg-body-tertiary ">
        <div class="container d-flex justify-content-end">
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
            @foreach ($resultatRecherche as $unResultat)
            <tr>
                <td >{{$unResultat->id}}</td>
                <td >{{$unResultat->titre}}</td>
                <td >{{$unResultat->auteur_id}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
