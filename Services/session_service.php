<?php 
    function login_Session ($credentials) {
       $_SESSION['login'] = false;
        include_once __DIR__. '/user_service.php';
    
        $login_info = list_Users();
        foreach($login_info as $key => $value) 

        {       
            if($value['username'] == $credentials['username'] &&
             $value['password'] == $credentials['password']){
              
                $_SESSION['login'] = true ;
                $_SESSION['username'] = $_POST['username'];
                header('Location: /?f=showHome');                
        }
    }   
            if($_SESSION['login'] != true){
                view_user_form();
                echo("Não foi possível realizar o login");
            }
    }

    /*

    [{"username":"Rodrigo","email":"Rodrigo@hotmail.com","password":"sourodrigo"},
    {"username":"Beatriz","email":"beatriz@hotmail.com","password":"soubeatriz"},
    {"username":"Gabriel","email":"Gabriel@hotmail.com","password":"sougabriel"}]

    "username":"Beatriz" "password":"soubeatriz"

        PRINCÍPIOS DO TESTE DE MESA:

        1- Mapear todos os valores variáveis e retornos de função que estão sendo testados.
        2- Mapear todos os valores que estão sendo manipulados/alterados.
        3- Executar passo a passo anotando a modificação dos valores.
        4- Verificar os valores finais.


        TESTE DE MESA:

        Passo 0: 
        value['username'] = NULL
        value['password'] = NULL
        credentials['username'] = Beatriz
        credentials['password'] = soubeatriz
        $_SESSION['login'] = NULL
        $_GET['f'] = NULL

        Passo 1:
                value['username'] = Rodrigo
                value['password'] = sourodrigo
                $_SESSION['login'] = false
                credentials['username'] = Beatriz
                credentials['password'] = soubeatriz
                $_GET['f'] = NULL

         Passo 2:
                value['username'] = Beatriz
                value['password'] = soubeatriz
                $_SESSION['login'] = true
                
                credentials['username'] = Beatriz
                credentials['password'] = soubeatriz
                $_GET['f'] = showHome
         
         Passo 3:
                value['username'] = Gabriel
                value['password'] = sougabriel
                $_SESSION['login'] = false
                credentials['username'] = Beatriz
                credentials['password'] = soubeatriz
                $_GET['f'] = showHome
                        
                        

            


    */
