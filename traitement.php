<?php


function tableDeMultiplication($nombre){
        echo 'La table de '.$nombre.' : <br>';  
    for($i=1;$i<=10 ;$i++){
        echo $i.' * '.$nombre.' = '.$i*$nombre.'<br>';
    }  
}
tableDeMultiplication(5);


?>