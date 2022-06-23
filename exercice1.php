<?php
include "common/head.php";
include "common/menu.php";

?>
<main>
    <div class="div">
        <h1 id="h1">Affichage des tables de multiplication</h1>
        <form action="exercice1.php" method="GET">
            <label for="" class="label">table de multiplication:</label>
            <input type="number" name="num" class="inp">
            <button type="submit" name="submit" class="btn">Envoyer</button>
        </form>
        <?PHP
        if (isset($_GET['submit'])) {
            $number = $_GET['num'];
            if (empty($number)) {
                echo " Saisir une valeur dans le champ ci-dessus";
            } else {
                echo "la table de $number";
                for ($i = 1; $i <= 10; $i++) {
                    $result = $i * $number;
                    echo "<div>$i * $number = $result </div>";
                }
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