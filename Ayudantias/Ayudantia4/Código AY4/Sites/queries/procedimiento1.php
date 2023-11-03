<?php

    // Nos conectamos a las bdds
    require("../config/conexion.php");
    include('../templates/header.html');

    // Primero obtenemos todos los pokemons de la tabla que queremos agregar
    $query = "SELECT * FROM pokemon2 ORDER BY id;";
    $result = $db2 -> prepare($query);
    $result -> execute();
    $pokemons = $result -> fetchAll();


    foreach ($pokemons as $pokemon){

        // Luego construimos las querys con nuestro procedimiento almacenado para ir agregando esas tuplas a nuestra bdd objetivo
        // Hacemos una verificacion para ver si el pokemon es legendario porque ese parámetro no se comporta muy bien entre php y sql
        // asi que lo agregamos manualmente al final (por eso los FALSE o TRUE)

        if (! $pokemon['legendary'] == 1){
            $query = "SELECT mover_pokemon($pokemon[0], '$pokemon[1]'::varchar,'$pokemon[2]'::varchar,$pokemon[3],$pokemon[4],$pokemon[5],$pokemon[6],$pokemon[7],$pokemon[8], $pokemon[9],FALSE);";
        } else {
            $query = "SELECT mover_pokemon($pokemon[0], '$pokemon[1]'::varchar,'$pokemon[2]'::varchar,$pokemon[3],$pokemon[4],$pokemon[5],$pokemon[6],$pokemon[7],$pokemon[8], $pokemon[9],TRUE);";
        }


        // Ejecutamos las querys para efectivamente insertar los datos
        $result = $db -> prepare($query);
        $result -> execute();
        $result -> fetchAll();
    }


    // Mostramos los cambios en una nueva tabla
    $query = "SELECT * FROM pokemon1 ORDER BY id DESC;";
    $result = $db -> prepare($query);
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
                <th>Generation</th>
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
                    echo "<tr>";
                    for ($i = 0; $i < 12; $i++) {
                        echo "<td>$pokemon[$i]</td> ";
                    }
                    echo "</tr>";
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