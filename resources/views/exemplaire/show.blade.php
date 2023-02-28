@extends('layouts.app')
@section('titre')
Exemplaires
@endsection
@section('content')
<h1 class="text-center">PAGE DES EXEMPLAIRES</h1>
<div class="container d-flex justify-content-center col-sm-12 col-md-12 col-xl-12 my-5">
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col"><strong># </strong></th>
                <th scope="col"><strong>Nom de l'ouvrage </strong></th>
                <th scope="col"><strong>Nom de la bibliothèque: </strong></th>
                <th scope="col"><strong>Exemplaire id: </strong></th>
                <th scope="col"><strong>DISPONIBILITE </strong></th>
                <th scope="col"><strong>DATE RETOUR </strong></th>
                <th scope="col"><strong>ACTION</strong></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $num=1;
            foreach ($exemplaire as $exemp) {
                    $disponible = 'Disponible';
                    $alert = "success";
            ?>
                <tr>
                    <td><?php echo $num++ ?></td>
                    <td><?php echo $exemp->ouvrage->titre ?></td>
                    <td><?php echo $exemp->bibliotheque->nom ?></td>
                    <td><?php echo $exemp->id ?></td>
                    <?php foreach ($emprunts as $emprunt) {
                         if($emprunt->id==$exemp->id){
                            $disponible= "Indisponible";
                            $alert="danger";
                        }
                    }?>
                    <td class="text-{{$alert}} fw-bold">
                       {{$disponible}}</td>
                    <td><strong class=""> reservation</strong></td>
                    <td>
                        <div class="">
                            <button class="btn btn-danger">SUPPRIMER</button>
                            <button class="btn btn-primary">MODIFIER</button>
                        </div>
                    </td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>
@endsection('content')
