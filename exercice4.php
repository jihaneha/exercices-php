<?php
session_start();
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
 
 if (isset($_POST['reset'])) {
     if (isset($_SESSION['guess'])) {
         unset($_SESSION['guess']);
     }
 }
 if (isset($_POST['submit'])) {

     $num = $_POST['chiffre'];
     if (empty($num) || $num <= 0) {
         echo "<p>Saisir une valeur dans le champ ci-dessus</p>";
     } else {
         // Get the computer guess
         $_SESSION['guess'] = rand(1, 100000);
         $guess =  $_SESSION['guess'];
         if ($num > $guess) {
             echo "<p>Le chiffre est plus grand</p>";
         } else if ($num < $guess) {
             echo "<p>Le chiffre est plus petit</p>";
         } else if ($num == $guess) {
             echo "<p>Le chiffre est true</p>";
         }
     }
 } else {
     echo "<p>Saisir une valeur dans le champ ci-dessus</p>";
 }
  

?>
</div>
<?php
include "common/footer.php";
?>