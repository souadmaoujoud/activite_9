<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>activité 9</title>
</head>
<body>
    <h2>Activité 9 Jeux de cartes</h2>
    <?php
        echo"<h3>Création de 52 cartes et affichage de cartes non brassées</h3>";

        $tabNum = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13);
        $tabSuite = array("Carreau", "Trèfle", "Coeur", "Pique");
        for ($k=0; $k < 4 ; $k++) 
        { 
            for ($i=0; $i < 13 ; $i++) 
            { 
            $tabCarte[]= $tabNum[$i] . "-" . $tabSuite[$k];
            }
        }

        echo "<table>";
        for ($i=0; $i < 4 ; $i++) 
        { 
            echo "<tr>";
            for($j=13*$i; $j<13*($i+1); $j++)
            {
                echo "<td>$tabCarte[$j]</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        echo"<h3>création de deux paquets</h3>";

        $paquet1 = array_slice($tabCarte, 0, 26);
        $paquet2 = array_slice($tabCarte, 26, 26);

        echo"<h4>Paquet 1</h4>";
        
        echo "<table>";
        for ($i=0; $i < 2 ; $i++) 
        { 
            echo "<tr>";
            for($j=13*$i; $j<13*($i+1); $j++)
            {
                echo "<td>$paquet1[$j]</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        echo"<h4>Paquet 2</h4>";

        echo "<table>";
        for ($i=0; $i < 2 ; $i++) 
        { 
            echo "<tr>";
            for($j=13*$i; $j<13*($i+1); $j++)
            {
                echo "<td>$paquet2[$j]</td>";
            }
            echo "</tr>";
        }
        echo "</table>";