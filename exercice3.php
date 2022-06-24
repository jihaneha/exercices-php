<?php
include "common/head.php";
include "common/menu.php";
?>

<div class="div">
<h1 class="h1" id="h1">Cercle - Périmètre et Aire</h1>
<form action="exercice3.php" method="POST">
    <label class="label" for="rayon">rayon : </label>
    <input type="number" name="rayon" id="rayon" class="inp"><br>
      <label for="perimetre">Perimetre:</label> 
      <input type="checkbox" id="perimetre" name="perimetre" checked><br>
      <label for="aire">Aire:</label>
      <input type="checkbox" id="aire" name="aire" checked
             ><br>
    <input type="submit" value="Envoyer" class="btn">
</form>
<?php 
   if(isset($_POST['rayon']) && $_POST['rayon'] >0){
       
       $rayon=$_POST['rayon'];
       $pi=pi();
       $perimetre=2*$pi*$rayon;
       $aire=$pi*$rayon*$rayon;

          if(isset($_POST["perimetre"])){
            echo "Résultats : <br> Le périmetre d'un cercle de rayon : $rayon est : $perimetre .<br> "; 
         } 
         if(isset($_POST["aire"])){
            echo "L'aire d'un cercle de rayon : $rayon est :   $aire " ;
         }
   }else{
        echo "<h1>Saisir une valeur dans le champ ci-dessus</h1>";
    }
    

?>
</div>
<?php
include "common/footer.php";
?>