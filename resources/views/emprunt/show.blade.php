@extends('layouts.app')

@section('content')
    {{-- *********** --}}
    <div style="">
        <style>
            body {
                background-image: url('/images/books.webp');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 1500px 1000Px;
            }
        </style>
    </div>
    <div class="container"
        style="text-align: center; background-color: rgb(0, 0, 0); color:aquamarine; font-size:20px; opacity:.;">
        <div class="row justify-content-center">
            <h1>********* LISTER MES EMPRUNTS ********</h1>
            <hr style="">
        </div>
        <div>
            <table class="table" style="text-align: center; background-color: black; color:aquamarine; height: 500px">
                <thead>
                    <tr>
                        <th scope="col"><strong>Nom de Ouvrage: </strong></th>
                        <th scope="col"><strong>Date_retour: </strong></th>
                        <th scope="col"><strong>Biblio_id: </strong></th>
                        <th scope="col"><strong>Ouvrage id: </strong></th>
                        <th scope="col"><strong>User_id: </strong></th>
                        <th scope="col"><strong>Created_at: </strong></th>
                        <th scope="col"><strong>Updated_at: </strong></th>
                        {{-- <button class="btn btn-primary">***</button> --}}
                    </tr>
                    <?php
                        foreach ($examplaires as $oneEmprunt) {
                            if ($oneEmprunt->user_id !== null){
                            ?>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $oneEmprunt->ouvrage->titre; ?></td>
                        <td><?php echo $oneEmprunt->date_retour; ?></td>
                        <td><?php echo $oneEmprunt->biblio_id; ?></td>
                        <td><?php echo $oneEmprunt->ouvrage_id; ?></td>
                        <td><?php echo $oneEmprunt->user_id; ?></td>
                        <td><?php echo $oneEmprunt->created_at; ?></td>
                        <td><?php echo $oneEmprunt->updated_at; ?></td>
                    </tr>
                </tbody>
                <?php
                   }
                }
              ?>
            </table>
        </div>
    </div>
@endsection
