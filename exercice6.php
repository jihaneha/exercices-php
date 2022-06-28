<?php
include "common/head.php";
include "common/menu.php";
?>

<div class="div">
<h1 class="h1" id="h1">Calculer une moyenne</h1>
        <form action="#" method="POST">
            <label for="notes" class="label">Combien de notes : </label>
            <input type="number" name="notes" id="notes" class="inp"><br />
            <input type="submit" value="Valider" name="submit" class="btn">
        </form>
<?php 
if(isset($_POST['notes']) && $_POST['notes'] >0){
    $notes = $_POST['notes'];
    $moyenne=null;
    $sommedesnotes = null;
    if(empty($notes)){
        echo  "<h1>veuillez remplir le champ ci-dessous s'il vous plaît.</h1>";
     }else{
        echo "Moyenne : <br> ";
        for ($i=1 ; $i<=$notes ; $i++){
            echo "note $i : <input type=number class=inp name=number required ><br> ";
                
        }
        echo "<input type=submit value=calculer name=submit>";
        
        // echo"La moyenne est : $sommedesnotes/$i";
    }
}else{
    echo "<h1>Saisir une valeur dans le champ ci-dessus</h1>";
}

?>
</div>
<?php
include "common/footer.php";
?>