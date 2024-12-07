<?php
$controller='index';
if (isset($_SERVER['PATH_INFO'])) {
    $controller = str_replace('/','',$_SERVER['PATH_INFO']);
}
if(!file_exists("controllers/{$controller}.controller.php")){
    http_response_code(404);
    echo "Página não existe";
    die();
}   


require  "controllers/{$controller}.controller.php";