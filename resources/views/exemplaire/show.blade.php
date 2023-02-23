@extends('layouts.app')
@section('content')
<h1>PAGE DES EXEMPLAIRES</h1>
<div class="container d-flex justify-content-center col-md-12 col-sm-12 col-xl-10 my-5">
    <table class="table text-center">
        <thead>
            <tr>
            <tr>
                <th scope="col"><strong>Nom de l'ouvrage </strong></th>
                <th scope="col"><strong>DISPONIBILITE </strong></th>
                <th scope="col"><strong>Nom de la bibliothèque: </strong></th>
                <th scope="col"><strong>Exemplaire id: </strong></th>
                <th scope="col"><strong>ACTION</strong></th>
            </tr>

            <?php
            foreach ($exemplaire as $exemp) {
                if ($exemp->user_id == null) {
            ?>
        </thead>
            <tbody>
                <tr>
                    <!-- <th>1</th> -->
                    <td><?php echo $exemp->ouvrage->titre ?></td>
                    <td><strong class="text-success">DISPONIBLE</strong></td>
                    <td><?php echo $exemp->bibliotheque->nom ?></td>
                    <td><?php echo $exemp->id ?></td>
                    <td><button class="btn btn-danger">SUPPRIMER</button> <button class="btn btn-primary">AJOUTER</button></td>
                </tr>
            </tbody>
            
<?php
    }
}

            foreach ($exemplaire as $exemp) {
                if ($exemp->user_id !== null) {
            ?>
        </thead>
            <tbody>
                <tr>
                    <!-- <th>1</th> -->
                    <td><?php echo $exemp->ouvrage->titre ?></td>
                    <td><strong class="text-success"><?php echo $exemp->date_retour ?></strong></td>
                    <td><?php echo $exemp->bibliotheque->nom ?></td>
                    <td><?php echo $exemp->id ?></td>
                    <td><button class="btn btn-danger">SUPPRIMER</button> <button class="btn btn-primary">AJOUTER</button></td>
                </tr>
            </tbody>
<?php
    }
}
?>
    </table>
</div>
@endsection('content')