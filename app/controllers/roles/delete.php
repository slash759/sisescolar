<?php
include('../../../app/config.php');

$id_rol = $_POST['id_rol'];



    $sentencia = $pdo->prepare("DELETE FROM roles WHERE id_rol=:id_rol");

$sentencia -> bindParam('id_rol', $id_rol);



    if ($sentencia->execute()) {
        session_start();
        $_SESSION['mensaje']="El rol se ha eliminado correctamente";
        $_SESSION['icono']="success";
        header('Location:'.APP_URL."/admin/roles");
    }else {
        session_start();
        $_SESSION['mensaje']="El rol no se ha podido eliminar";
        $_SESSION['icono']="error";
        header('Location:'.APP_URL."/admin/roles");
    }







?>