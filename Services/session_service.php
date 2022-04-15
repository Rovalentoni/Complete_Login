<?php 
    function login_Session ($credentials) {
        include_once INCLUDE_PATH. './Services/user_service.php';
        // $login_info = json_decode(file_get_contents('./Data/users.json'));
        // print_r(list_Users());
        
        $login_info = list_Users();
        foreach($login_info as $key => $value)
        
        {
        //     print_r($value);?><br><br><?php
        // print_r($value['username']);
            if($value["username"] == $credentials["username"] &&
             $value["password"] == $credentials["password"]){
                $_SESSION['login'] = true;

                $_GET['f'] = 'showHome';
            
        };
            // print_r($login_info);
            // print_r(list_Users());
            // var_dump(($value));
            // print_r($_POST);

            if($_SESSION['login'] != true){
                echo("Não foi possível realizar o login.");
            }
    }
};
?>