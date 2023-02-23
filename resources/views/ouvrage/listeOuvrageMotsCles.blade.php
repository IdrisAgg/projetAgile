
@extends('layouts.app')

@section('content')

    <h1 class="mb-5 text-center">Les ouvrages par mots clés </h1>

    <nav class="navbar bg-body-tertiary ">
        <div class="container d-flex justify-content-end">
            <form method="GET" action="/" class="d-flex" role="search">
                @csrf
                <input name="keyword" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <?php var_dump($keywords)  ?>
    {{-- <table class="table container">
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
                <td >{{$unOuvrage["id"]}}</td>
                <td >{{$unOuvrage["titre"]}}</td>
                <td >{{$unOuvrage["auteur"]->nom}}</td>

            </tr>
            @endforeach
        </tbody>
    </table> --}}

@endsection
