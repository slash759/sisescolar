<?php

$sql_roles = "SELECT * FROM roles WHERE estado = '1' AND id_rol = '$id_rol'";
$query_roles = $pdo->prepare($sql_roles);
$query_roles->execute();
$datos_roles = $query_roles->fetchAll(PDO::FETCH_ASSOC); 

foreach ($datos_roles as $datos_role) {
    $nombre_rol = $datos_role['nombre_rol'];
}

?>