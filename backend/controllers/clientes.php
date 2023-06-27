<?php 
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
header('Content-Type:application/json');
require_once("../conectar.php");
require_once("../models/Clientes.php");

$alquilar = new Alquilar();
$body = json_decode(file_get_contents("php://input"),true);
switch ($_GET["op"]){
    case "GetAll":
        $datos = $alquilar->get_cliente();
        echo json_encode($datos);
    break;

    case "insert":
        $datos = $alquilar->insert_cliente($body["constructora"],$body["nitConstructora"],$body["nombreRepre"],$body["email"],$body["telefono"]);
        echo json_encode("insertado correctamente");
    break;

    case "delete":
        $datos=$alquilar->delete_cliente($_GET['id']);
        echo json_encode("cliente eliminado");
        break;
    }
?>