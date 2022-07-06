<?php
include "common/head.php";
include "common/menu.php";

?>
<main>
    <div class="div">
        <h1 id="h1">Affichage d'une Facture</h1>
        <form action="exercice9.php" method="GET">
            <label for="" class="label">Numéro de commande :</label>
            <input type="number" name="num" class="inp">
            <button type="submit" name="submit" class="btn">Envoyer</button>
        </form>
        <?PHP
        if (isset($_GET['submit'])) {
            $number = $_GET['num'];
            if (empty($number)) {
                echo " Saisir une valeur dans le champ ci-dessus";
            } else {
                echo "Facture de la commande de :  $number";
               
            }
        } else {
            echo "Saisir une valeur dans le champ ci-dessus";
        }
        ?>


    </div>
</main>

<?php
include "common/footer.php";
?>