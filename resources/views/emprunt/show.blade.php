@extends('layouts.app')

@section('content')
    {{-- *********** --}}
    <div style="padding-top: 100px;">
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
        style="text-align: center; background-color: rgb(0, 0, 0); color:aquamarine; font-size:20px; opacity:.9;">
        <div class="row justify-content-center">
            <h1>********* LISTER MES EMPRUNTS ********</h1>
            <hr style="">
        </div>
        <div>
            <table class="table" style="text-align: center; background-color: black; color:aquamarine; height: 500px">
                <thead>
                    <tr>
                        <th scope="col"><strong>Ouvrage id: </strong></th>
                        <th scope="col"><strong>Titre de Ouvrage: </strong></th>
                        <th scope="col"><strong>Nom de l'auteur: </strong></th>
                        <th scope="col"><strong>Biblio_id: </strong></th>
                        <th scope="col"><strong>Nom de Bibliothèque : </strong></th>
                        <th scope="col"><strong>Date_retour: </strong></th>
                        {{-- **************extra*************** --}}
                        <th scope="col"><strong>Action</strong></th>
                    </tr>
                    <?php
                        foreach ($examplaires as $oneEmprunt) {
                            if ($oneEmprunt->user_id !== null){
                            ?>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $oneEmprunt->ouvrage_id; ?></td>
                        <td><?php echo $oneEmprunt->ouvrage->titre; ?></td>
                        <td><?php echo $oneEmprunt->ouvrage->auteur->nom; ?></td>
                        <td><?php echo $oneEmprunt->biblio_id; ?></td>
                        <td><?php echo $oneEmprunt->bibliotheque->nom; ?></td>
                        <td><?php echo $oneEmprunt->date_retour; ?></td>
                        {{-- **************extra*************** --}}
                        <td><button class="btn btn-primary">Prolonger</button></td>
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
