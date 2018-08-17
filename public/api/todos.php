<?php

$output = [
    'success'=> false
];

require_once('db_connect.php');
    
$method = $_SERVER['REQUEST_METHOD'];
$action = $_GET['action'];


switch($method){
    case 'GET':
        require_once("get/".$action.".php");
        break;
    case 'POST':
        require_once('post/'.$action.'.php');
        break;
    case 'PUT':
        $output['message']= 'PUT Request Made';
        break;
    case  'PATCH':
        $output['message']= 'PATCH Request Made';
        break;
    case  'DELETE':
        $output['message']= 'DELETE Request Made';
        break;
    default:
        $output['message']= 'Unknown Request Made';
        break;
};

$output = json_encode($output);

print($output);


