<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once("../class/class_oferta.php"); //incluimos clase producto
include_once("../servicio.php"); 
login();

$_POST=json_decode(file_get_contents('php://input'),true); //decodificar el json


switch($_SERVER['REQUEST_METHOD']){
    case 'POST':

         break;
    case 'GET':
            //todos
            oferta::obtenerOfertas();//ESTATICO  
        break;

    case 'PUT':
        break;

    case 'DELETE':
        break;

    }
?>