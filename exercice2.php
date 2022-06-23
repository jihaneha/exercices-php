
<?php
include "common/head.php";
include "common/menu.php";

?>
<div class="div">
<h1 class="h1">Affichage d'une pyramide</h1>
<form action="exercice2.php" method="POST">
    <label class="label" for="hauteur">Hauteur de la pyramide : </label>
    <input type="number" name="hauteur" id="hauteur" class="inp">
    <input type="submit" value="Envoyer" class="btn">
</form>
<?php 
    if(isset($_POST['hauteur']) && $_POST['hauteur'] >0){
        $hauteur = $_POST['hauteur'];
        echo "Pyramide de hauteur : ".$hauteur ;
        $txt = "";
        for($i = 0 ; $i < $hauteur ; $i++){
            $txt .= "xx";
            echo $txt."<br>";
        }
        for($i = 0 ; $i < $hauteur-1 ; $i++){
            $txt = substr($txt,0,strlen($txt)-2);
            echo $txt."<br>";
        }
    } else {
        echo "Saisir une valeur dans le champ ci-dessus";
    }
?>
</div>
<?php
include "common/footer.php";
?>