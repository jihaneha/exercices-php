
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
        if(empty($hauteur)){
            echo  "<h1>veuillez remplir le champ ci-dessous s'il vous plaît.</h1>";
         }else{ echo "<h3>Pyramide de Hauteur: $hauteur</h3><br>";
            for($i=1; $i<=$hauteur; $i++){
                for($j=1; $j<=$i; $j++){
                    echo "**";
                }
                echo "<br>";
            }
            for($i=1; $i<=$hauteur; $i++){
                for($j=$hauteur - $i; $j>=1; $j--){
                    echo "**";
                }
                echo "<br>";
            }
        }
    }else{
        echo "<h1>Saisir une valeur dans le champ ci-dessus</h1>";
    }


?>
</div>
<?php
include "common/footer.php";
?>