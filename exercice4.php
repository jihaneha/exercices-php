<?php
include "common/head.php";
include "common/menu.php";
?>

<div class="div">
<h1 class="h1" id="h1">Trouver le nombre choisi par l'ordinateur</h1>
        <form action="#" method="POST">
            <input type="hidden" name="res" value="Reinit">
            <input type="submit" value="Reinitialiser" name="reset" class="inp1">
        </form>
        <form action="#" method="POST">
            <label for="chiffre" class="label">Quel est le chiffre : </label>
            <input type="number" name="chiffre" id="chiffre" class="inp"><br />
            <input type="submit" value="Valider" name="submit" class="btn">
        </form>
<?php 
   if(isset($_POST['rayon']) && $_POST['rayon'] >0){




}else{
    echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
}
    

?>
</div>
<?php
include "common/footer.php";
?>