<?php
session_start();




define('INCLUDE_PATH', 'C:\Users\Rvale\Programming\6-PHP\1-Exercises\Complete_Login');



//CONTROLLER

function view_user_form()
{
    include_once INCLUDE_PATH . '\Services\login.php';
}


function createUser()
{
    include_once INCLUDE_PATH . '\Services\user_service.php';
    create_User($_POST);
    header('Location: http://localhost:8000/?f=listUsers');
}

function listUsers() {
    include_once INCLUDE_PATH. '\Services\user_service.php';
    // include_once INCLUDE_PATH. '\Services\session_service.php';
    $userList = list_Users();
    loginSession();
    // if ($_SESSION['login'] == true){

    // include INCLUDE_PATH. './Template/Users/home.php';}
    //  else echo("Não foi possível iniciar a sessão.");
}

function loginSession() {
    include_once INCLUDE_PATH. '\Services\session_service.php';
    login_Session($_POST);
    if(isset($_SESSION['login'])){
    } else {
        echo("não foi possível realizar o login");
    }
}

function showHome() {
    include_once INCLUDE_PATH. './Template/Users/home.php';
}




//ROTEANDO

if(!empty($_GET)){
    $functionName = $_GET['f'];
    $functionName();
    } else view_user_form();

if(isset($_POST['acao'])){
    echo("Formulário Enviado");
}

?>