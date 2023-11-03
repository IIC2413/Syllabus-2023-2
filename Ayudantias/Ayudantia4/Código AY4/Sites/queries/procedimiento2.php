<?php

    // Nos conectamos a las bdds
    require("../config/conexion.php");
    include('../templates/header.html');


    // Enviamos del post la informacion a la query con nuestro procedimiento almacenado que realizará
    // las verificaciones correspondientes
    $query = "SELECT verificar_pokemon('$_POST[name]', '$_POST[type]', $_POST[total], $_POST[hp], $_POST[attack], $_POST[defense], $_POST[sp_atk], $_POST[sp_def], $_POST[speed], $_POST[legendary], $_POST[generation]);";
    $result = $db -> prepare($query);
    $result -> execute();


    // Si nos interesa acceder a los booleanos que retorna el procedimiento, debemos hacer fetch de los resultados
    $pokemons = $result -> fetchAll();


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