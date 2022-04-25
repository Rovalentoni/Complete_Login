<?php

session_start();
ini_set('error_reporting', E_ALL);


//CONTROLLER

function view_home_form()
{
    include_once __DIR__ . '/Services/login.php';
    if(isset($_GET['aviso_Login'])){
        echo "Você precisa realizar o login para continuar";
    }
    include_once __DIR__ . '/Services/user_service.php';
    json_Original();
}

function createUserForm(){
    if (isset($_SESSION['login'])) {
        include_once __DIR__. '/Template/Users/create.php';
    } else { 
                header('Location:/?f=view_home_form&aviso_Login=1'); 
    }}


function createUser() {
    if (isset($_SESSION['login'])) {
        include_once __DIR__ . '/Services/user_service.php';
        create_User($_POST);    } else { 
                header('Location:/?f=view_home_form&aviso_Login=1'); 
    }}
    



function listUsers() {
    if (isset($_SESSION['login'])) {
        include_once __DIR__ . '/Services/user_service.php';
        $userList = list_Users();    } else { 
                header('Location:/?f=view_home_form&aviso_Login=1'); 
    }}
    
    


function editForm() {
    if (isset($_SESSION['login'])) {
        include_once __DIR__. '/Services/user_service.php';
        include_once __DIR__. '/Template/Users/edit.php';    } else { 
                header('Location:/?f=view_home_form&aviso_Login=1'); 
    }}
    


function editUser() {
    if (isset($_SESSION['login'])) {
        include_once __DIR__. '/Services/user_service.php';
        edit_User($_POST['id']);    } else { 
                header('Location:/?f=view_home_form&aviso_Login=1'); 
    }}
    

function deleteForm() {
    if (isset($_SESSION['login'])) {
        include_once __DIR__ . '/Template/Users/delete.php';
    } else { 
                header('Location:/?f=view_home_form&aviso_Login=1'); 
    }}
    



function deleteUsers() {
    if (isset($_SESSION['login'])) {
        include_once __DIR__ . '/Services/user_service.php';
        delete_Users($_GET['user_id']);    } else { 
                header('Location:/?f=view_home_form&aviso_Login=1'); 
    }}
    
     


function viewForm() {
    if (isset($_SESSION['login'])) {
        include_once __DIR__ . '/Services/user_service.php';
        include_once __DIR__.'/Template/Users/view_details.php';    } else { 
                header('Location:/?f=view_home_form&aviso_Login=1'); 
    }}
    


function loginSession() {
    include_once __DIR__. '/Services/session_service.php';
    login_Session($_POST);
    
}

function logout() {
    $_SESSION['login'] == false;
    session_destroy();
    header('Location:/?f=view_home_form&aviso_Login=1');
    
}

function showHome() {
    include_once __DIR__ . '/Services/user_service.php';
    $users = list_Users();
    if (isset($_SESSION['login'])) {
    include_once __DIR__. '/Template/Users/home.php';
} else { 
            header('Location:/?f=view_home_form&aviso_Login=1'); 
}}

//ROTEANDO

if(!empty($_GET)){
    $functionName = $_GET['f'];
    $functionName();
    } else view_home_form();

?>