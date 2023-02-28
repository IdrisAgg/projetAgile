<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


@extends('layouts.app')

@section('content')
    {{-- ***********Alert message --}}

    @if (Session::has('success'))
        <div style="padding: 10px; background-color:rgb(181, 228, 228); text-align: center; font-size: 2em">
            <div style="color:rgb(43, 0, 255)" class="alert allert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert">
                    <i class="fa fa-times"></i>
                </button>
                <strong>Success : </strong> {{ session('success') }}
            </div>
        </div>
    @endif

    @if (Session::has('error'))
        <div class="alert allert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <i class="fa fa-times"></i>
            </button>
            <strong>Error: </strong> {{ session('error') }}
        </div>
    @endif
    {{-- ***********alert message end ******* --}}

    <style>
        body {
            background-image: url('/images/books.webp');
            background-repeat: no-repeat;
            /* background-attachment: fixed; */
            background-size: 1500px 1000Px;
        }
    </style>


    </div>
    <div class="container" style="text-align: center; background-color: rgb(0, 0, 0); color:aquamarine; font-size:20px; ">
        <div class="row justify-content-center">
            <h1>********* LISTER MES EMPRUNTS ********</h1>
        </div>
        <table class="table" style="text-align: center; background-color: black; color:aquamarine; ">
            <thead id="" class="">
                <tr style="table-layout:fixed;">
                    <th scope="col"><strong>Titre de Ouvrage: </strong></th>
                    <th scope="col"><strong>Nom de l'auteur: </strong></th>
                    <th scope="col"><strong>Nom de Bibliothèque : </strong></th>
                    <th scope="col"><strong>Date_retour: </strong></th>
                    <th scope="col"><strong>Nombre de prolongation: </strong></th>
                    <th scope="col"><strong>Action</strong></th>
                </tr>
                <?php
            foreach ($examplaires as $oneEmprunt) {
            ?>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $oneEmprunt->exemplaire->ouvrage->titre; ?></td>
                    <td><?php echo $oneEmprunt->exemplaire->ouvrage->auteur->nom; ?></td>
                    <td><?php echo $oneEmprunt->exemplaire->bibliotheque->nom; ?></td>
                    <td><?php echo $oneEmprunt->date_retour; ?></td>
                    <td><?php echo $oneEmprunt->nb_prolongation; ?></td>
                    @if ($oneEmprunt->nb_prolongation < 2 && $oneEmprunt->nb_prolongation > 0)
                        <td>
                            <section class="popup_container">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModalCenter{{ $oneEmprunt->id }}">
                                    Prolonger
                                </button>

                                <div class="modal fade" id="exampleModalCenter{{ $oneEmprunt->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <h2>Prolonger Des Livre</h2>
                                            <hr>
                                            <div class="modal-body">
                                                <h3 style="color:#000">If you want to reserve the book Please Confirm or
                                                    Cancel</h3>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-primary"><a style="color:black"
                                                        href="/prolonger/{{ $oneEmprunt->id }}">Confirm</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </td>
                    @endif

                </tr>
            </tbody>
            <?php
                }
?>
        </table>

    </div>
@endsection
