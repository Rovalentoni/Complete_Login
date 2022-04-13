


<?php

define('INCLUDE_PATH', '\Users\Rvale\OneDrive\Área de Trabalho\Programming\6- PHP\1-Exercises\Complete_Login');

//CONTROLLER

function view_user_form()
{
    include INCLUDE_PATH . '\Template\Users\create.php';
}


function createUser()
{
    include INCLUDE_PATH . '\Services\user_service.php';
    create_User($_POST);
    //header('Location: http://localhost:8000/?f=list_users');
}

function list_users() {
    include INCLUDE_PATH. '\Services\user_service.php';
    list_Users();
}



?>



<?php
//ROTEANDO

$functionName = $_GET['f'];
$functionName();
?>