<?php
include "common/head.php";
include "common/menu.php";

?>
<main>
    <div class="div">
        <h1 id="h1">Affichage d'une pyramide</h1>
        <form action="exercice2.php" method="GET">
            <label for="" class="label">Hauteur de la pyramide :</label>
            <input type="number" name="num" class="inp">
            <button type="submit" name="submit" class="btn">Envoyer</button>
        </form>
        <?PHP
        if (isset($_GET['submit'])) {
            $hauteur = $_GET['num'];
            if (empty($number)) {
                echo " Saisir une valeur dans le champ ci-dessus";
            } else {

            }


        }  
        else {
            echo "Saisir une valeur dans le champ ci-dessus";
        }
        ?>


    </div>
</main>

<?php
include "common/footer.php";
?>