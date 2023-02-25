@extends('layouts.app')

@section('content')
    @if (session()->get('unsuccess'))
        <div class="container d-flex justify-content-center">
            <div class=" col-md-4 alert  alert-danger py-3">
                {{ session()->get('unsuccess') }}
            </div>
        </div>
    @endif
    {{-- *********** --}}
    <div style="padding-top: 100px;">
        <style>
            body {
                background-image: url('/images/books.webp');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 1500px 1000Px;
            }

            /* trying to fixed the table head */
            #myTable {
                table-layout: fixed;
            }
        </style>
    </div>

    </div>
    <div class="container"
        style="text-align: center; background-color: rgb(0, 0, 0); color:aquamarine; font-size:20px; opacity:.9;">
        <div class="row justify-content-center">
            <h1>********* LISTER MES EMPRUNTS ********</h1>
            <hr style="">
        </div>
        <div>
            {{-- <div style="table-layout:fixed;"> --}}
            <table class="table" style="text-align: center; background-color: black; color:aquamarine; height: 500px; ">
                <thead id="" class="">
                    <tr style="table-layout:fixed;">
                        <th scope="col"><strong>Titre de Ouvrage: </strong></th>
                        <th scope="col"><strong>Nom de l'auteur: </strong></th>
                        <th scope="col"><strong>Nom de Bibliothèque : </strong></th>
                        <th scope="col"><strong>Date_retour: </strong></th>
                        <th scope="col"><strong>Nombre de prolongation: </strong></th>
                        {{-- **************extra*************** --}}
                        <th scope="col"><strong>Action</strong></th>
                    </tr>
                    <?php
                        foreach ($examplaires as $oneEmprunt) {
                            if ($oneEmprunt->user_id !== null){
                            ?>
                </thead>
                {{-- </div> --}}
                <tbody>
                    <tr>
                        <td><?php echo $oneEmprunt->exemplaire->ouvrage->titre; ?></td>
                        <td><?php echo $oneEmprunt->exemplaire->ouvrage->auteur->nom; ?></td>
                        <td><?php echo $oneEmprunt->exemplaire->bibliotheque->nom; ?></td>
                        <td><?php echo $oneEmprunt->date_retour; ?></td>
                        <td><?php echo $oneEmprunt->nb_prolongation; ?></td>
                        {{-- **************extra*************** --}}
                        @if ($oneEmprunt->nb_prolongation < 2 && $oneEmprunt->nb_prolongation > 0)
                            <td><button class="btn btn-info"> <a style="color:black"
                                        href="/prolonger/{{ $oneEmprunt->id }}">Prolonger</a> </button>
                            </td>
                        @endif

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
