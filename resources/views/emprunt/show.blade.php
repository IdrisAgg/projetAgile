@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: black; color:rgb(241, 235, 235);">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Borrowed books lists </h2>
            </div>

            <div>
                <table data-toggle="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date_retour</th>
                            <th>Biblio_id</th>
                            <th>Ouvrage_id</th>
                            <th>User_id </th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($examplaires as $oneEmprunt)
                            <tr>
                                <td>{{ $oneEmprunt->id }}</td>
                                <td>{{ $oneEmprunt->date_retour }}</td>
                                <td>{{ $oneEmprunt->biblio_id }}</td>
                                <td>{{ $oneEmprunt->ouvrage_id }}</td>
                                <td>{{ $oneEmprunt->user_id }}</td>
                                <td>{{ $oneEmprunt->created_at }}</td>
                                <td>{{ $oneEmprunt->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div>
        </div>

    </div>
@endsection
