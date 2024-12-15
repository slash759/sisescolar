<?php

define('SERVER','localhost');
define('USER','root');
define('PASSWORD','');
define('DATABASE','sistemaescuela');
define('APP_NAME','Sistema Escolar');
define('APP_URL','http://localhost/sisescolar');
define('KEY_API_MAPS','');

$server = "mysql:dbname=".DATABASE.";host=".SERVER;

try {
    $pdo= new PDO($server, USER, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "Conexion exitosa a DB";
} catch (PDOException $e) {
    echo "Error al conectar a DB";
}

date_default_timezone_set('America/Lima');
$fechaHora = date(format: 'Y-m-d H:i:s');
$fecha_actual = date(format: 'Y-m-d');
$dia_actual = date(format: 'd');
$mes_actual = date(format: 'm');
$ano_actual = date(format: 'Y');

$estado_de_registro = '1';