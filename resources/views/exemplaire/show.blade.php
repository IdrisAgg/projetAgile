<h1>PAGE DES EXEMPLAIRES</h1>
<?php 

foreach ($exemplaire as $exemp) {
    ?>
<div class="">
    
    <div class=""><strong>User id: </strong><?php echo $exemp->user_id?></div>
    <div class=""><strong>Date de retour: </strong><?php echo $exemp->date_retour?></div>
    <div class=""><strong>Exemplaire id: </strong><?php echo $exemp->id?></div>
    <div class=""><strong>Ouvrage id: </strong><?php echo $exemp->ouvrage_id?></div>
    <div class=""><strong>Bibliothèque id: </strong><?php echo $exemp->biblio_id?></div>

</div>

<?php
}
?>