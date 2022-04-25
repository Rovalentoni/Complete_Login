<?php

session_start();
ini_set('error_reporting', E_ALL);


//CONTROLLER

function view_user_form()
{
    include_once __DIR__ . '/Services/login.php';
    include_once __DIR__ . '/Services/user_service.php';
    json_Original();
}

function createUserForm()
{
    include_once __DIR__. '/Template/Users/create.php';
}

function createUser() {
    include_once __DIR__ . '/Services/user_service.php';
    create_User($_POST);

}

function listUsers() {
    include_once __DIR__ . '/Services/user_service.php';
    $userList = list_Users();
    
}

function editForm() {
    include_once __DIR__. '/Services/user_service.php';
    include_once __DIR__. '/Template/Users/edit.php';
}

function editUser() {
    include_once __DIR__. '/Services/user_service.php';

    edit_User($_POST['id']);
}

function deleteForm() {
    include_once __DIR__ . '/Template/Users/delete.php';

}

function deleteUsers() {
     include_once __DIR__ . '/Services/user_service.php';
     delete_Users($_GET['user_id']);
     
}

function loginSession() {
    include_once __DIR__. '/Services/session_service.php';
    login_Session($_POST);
    if($_SESSION['login'] == true){
            showHome();
    } else {
        echo("não foi possível realizar o login");
    }
}

function showHome() {
    include_once __DIR__ . '/Services/user_service.php';
    $users = list_Users();
    include_once __DIR__. '/Template/Users/home.php';
    
}

//ROTEANDO

if(!empty($_GET)){
    $functionName = $_GET['f'];
    $functionName();
    } else view_user_form();

?>