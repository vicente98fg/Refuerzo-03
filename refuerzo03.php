<?php

$conector = new mysqli("localhost", "root", "", "liga");
if ($conector->connect_errno) {
    echo "Fallo al conectar a MySQL: (".$conector->connect_errno.")" . $conector->connect_error;
} else {
    $resultado = $conector->query("SELECT * FROM equipo");
}

?>



<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" media="screen" href="maincss.css" />
</head>
<body>

<table>
    <tr>
        <td><b>ID Equipo</b></td>
        <td><b>Nombre Equipo</b></td>
        <td><b>Ciudad Equipo</b></td>
    </tr>

    <?php
     foreach ($resultado as $equipo) {
         echo "<tr>";
         echo "<td>".$equipo['id_equipo']."</td>";
         echo "<td>".$equipo['nombre']."</td>";
         echo "<td>".$equipo['ciudad']."</td>";
         echo "</tr>";
     }

    ?>

</table>

</body>
</html>
