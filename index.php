<?php 
    session_start();
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>COGIP</title>
</head>
<body>
    


<?php
// GENERATE CONST CONTAIN PATH TO INDEX.PHP
define('ROOT' , str_replace('index.php', '' , $_SERVER['SCRIPT_FILENAME']));
define('URL' , 'https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/');

require_once(ROOT.'controllers/Controller.php');
require_once(ROOT.'models/Model.php');
<<<<<<< HEAD
=======
include(ROOT.'views/menu.php');
>>>>>>> master

 
$params = explode('/', $_GET['p']);

if($params[0] != ""){
        $controller = ucfirst($params[0]);

        $action = isset($params[1]) ? $params[1] : 'index';

        require_once(ROOT.'controllers/'.$controller.'.php');

        $controller = new $controller();
    if(method_exists($controller,$action)){
        unset($params[0]);
        unset($params[1]);
        call_user_func_array([$controller , $action ], $params);
    }else{
        http_response_code(404);
        echo 'La page n\'existe pas';
        echo '<meta http-equiv="refresh" content="3;URL="'.URL.'Home/index">';
    }
}else{
        echo '<section class="text-center mt-5">';
        echo '<a href="'.URL.'Home/index"><button class="btn btn-info text-center">ENTER<button></a>';
        echo '</section>';
}
  
?>
</body>
</html>