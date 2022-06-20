<?PHP
        if (isset($_GET['submit'])) {
            $valid=null;
            $error=null;
            $number = $_GET['num'];
            if (empty($number)) {
                $valid = "Saisir une valeur dans le champ ci-dessus";
            } else {
                echo "<p>la table de $number</p>";
                for ($i = 1; $i <= 10; $i++) {
                    $result = $i * $number;
                    echo "<div>$i * $number = $result </div>";
                }
            }
        } else {
            echo "<p>Saisir une valeur dans le champ ci-dessus</p>";
        }
    
include "exercice1.php"