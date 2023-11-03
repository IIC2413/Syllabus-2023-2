<?php

    require("../config/conexion.php");
    include('../templates/header.html');

    $query = "SELECT * FROM pokemon2 ORDER BY id;";
    $result = $db2 -> prepare($query);
    $result -> execute();
    $pokemons = $result -> fetchAll();

?>

    <body>  
        <table class='table'>
            <thead>
                <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Type</th>
                <th>Total</th>
                <th>HP</th>
                <th>Attack</th>
                <th>Defense</th>
                <th>Sp. Atk</th>
                <th>Sp. Def</th>
                <th>Speed</th>
                <th>Legendary</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($pokemons as $pokemon) {
                    if ($pokemon[10] == 't') {
                        $pokemon[10] = 'True';
                    } else {
                        $pokemon[10] = 'False';
                    }
                    echo "<tr> <td>$pokemon[0]</td> <td>$pokemon[1]</td> <td>$pokemon[2]</td> <td>$pokemon[3]</td> <td>$pokemon[4]</td> <td>$pokemon[5]</td> <td>$pokemon[6]</td> <td>$pokemon[7]</td> <td>$pokemon[8]</td> <td>$pokemon[9]</td> <td>$pokemon[10]</td> </tr>";
                }
                ?>
            </tbody>
        </table>
        <footer>
            <p>
                IIC2413 - Ayudantía 4 BDD
            </p>
        </footer>

    </body>
</html>