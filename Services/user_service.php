<?php


function create_User($data)
{
    // print_r(strlen($_POST['username']));
    // print_r($data['username']);
    // print_r($_POST['username']);
    // if ($data['username'] == "" || strlen($data['username'] < 6)) { 
    //     echo("Os dados não podem ser vazios ou menores que 6 digitos.");
        if($data['username'] != "" && strlen($data['username']) > 3 && $data['email'] != "" && strlen($data['email']) > 3 && 
        $data['password'] != "" && strlen($data['password']) > 3 ){
            $currentUserList = list_Users();
            // print_r($data);
            $currentUserList[] = $data;
            foreach ($currentUserList as $key => $value){
                $value['id'] = $key;
                $currentUserList[$key] = $value;
            }
            // print_r($currentUserList); 
            // print_r($value);
            //  print_r($data);
            
            file_put_contents(INCLUDE_PATH . './Data/users.json', json_encode($currentUserList));
            // $_GET['f'] = 'showHome';
            // router();
            header('Location: http://localhost:8000/?f=showHome');
            die;        

    } else { echo("Dados inválidos. É necessário preencher todos os campos e que os mesmos tenham no mínimo 4 dígitos.");
       

        // print_r($currentUserList);

    }
};



function list_Users()
{
    // $encodeDecode = json_decode(file_get_contents('./Data/users.json'), true);
    // file_put_contents(INCLUDE_PATH. './Data/users.json', json_encode($encodeDecode));
    return json_decode(file_get_contents('./Data/users.json'), true);
};

function delete_Users($param) {
     print_r($_POST);
    $id = $_POST['id'];
    include_once INCLUDE_PATH . '/Services/user_service.php';
            $currentUserList = list_Users();
        
    if (isset($param['deleteBtn'])) {
        array_splice($currentUserList, $id, 1);
    };
}

function json_Original()
{
    $usersOriginais = [
        ["username" => "Rodrigo", "email" => "Rodrigo@hotmail.com", "password" => "sourodrigo"],
        ["username" => "Beatriz", "email" => "beatriz@hotmail.com", "password" => "soubeatriz"],
        ["username" => "Gabriel", "email" => "Gabriel@hotmail.com", "password" => "sougabriel"]
    ];
    $json_Original = json_decode(file_get_contents('./Data/users.json'), true);
    
    // var_dump($json_Original);
    
    foreach($usersOriginais as $key =>$value){
        $value['id'] = $key;
        $usersOriginais[$key] = $value;
    }
    
    if(is_countable($json_Original) == true && count($json_Original, COUNT_RECURSIVE) < 13 || $json_Original == NULL){
     $json_Original = $usersOriginais;
     file_put_contents('./Data/users.json', json_encode($json_Original));
}}

?>