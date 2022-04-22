<?php

session_start();
define('INCLUDE_PATH', 'C:\Users\Rvale\Programming\6-PHP\1-Exercises\Complete_Login');

//CONTROLLER

function view_user_form()
{
    include_once INCLUDE_PATH . '\Services\login.php';
    include_once INCLUDE_PATH . '\Services\user_service.php';
    json_Original();

}

function createUserForm()
{
    include_once INCLUDE_PATH. './Template/Users/create.php';
    // header('Location: http://localhost:8000/?f=listUsers');
}

function createUser() {
    include_once INCLUDE_PATH . '\Services\user_service.php';
    create_User($_POST);

}

function listUsers() {
    // include_once INCLUDE_PATH. '\Services\session_service.php';
    include_once INCLUDE_PATH . '\Services\user_service.php';
    $userList = list_Users();
    
    // if ($_SESSION['login'] == true){

    // include INCLUDE_PATH. './Template/Users/home.php';}
    //  else echo("Não foi possível iniciar a sessão.");
}

function deleteForm() {
    include_once INCLUDE_PATH . '/Template/Users/delete.php';

}

function deleteUsers() {
     include_once INCLUDE_PATH . '\Services\user_service.php';
     delete_Users($_POST);
     
}

function loginSession() {
    include_once INCLUDE_PATH. '\Services\session_service.php';
    login_Session($_POST);
    if($_SESSION['login'] == true){
            include_once INCLUDE_PATH .'/Template/Users/home.php';
    } else {
        echo("não foi possível realizar o login");
    }
}

function showHome() {
    include_once INCLUDE_PATH. './Template/Users/home.php';
}
// if(!empty($_GET['f'])){
// function router () {
//     $functionName = $_GET['f'];
//     $functionName();
// }};


//ROTEANDO

if(!empty($_GET)){
    $functionName = $_GET['f'];
    $functionName();
    } else view_user_form();




?>