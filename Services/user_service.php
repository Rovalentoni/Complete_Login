<?php


function create_User($data)
{
    if (
        $data['username'] != "" && strlen($data['username']) > 3 && $data['email'] != "" && strlen($data['email']) > 3 &&
        $data['password'] != "" && strlen($data['password']) > 3
    ) {
        $currentUserList = list_Users();
        $currentUserList[] = $data;
        foreach ($currentUserList as $key => $value) {
            $value['id'] = $key;
            $currentUserList[$key] = $value;
        }
        file_put_contents(__DIR__ . '/../Data/users.json', json_encode($currentUserList));
        header('Location: http://localhost:8000/?f=showHome');
        die;
    } else {
        echo ("Dados inválidos. É necessário preencher todos os campos e que os mesmos tenham no mínimo 4 dígitos.");
    }
};


function list_Users()
{
    return json_decode(file_get_contents('./Data/users.json'), true);
};

function delete_Users($userId)
{
    $currentUserList = list_Users();
    foreach ($currentUserList as $key => $value) :
        if ($value['id'] == $userId) {
            unset($currentUserList[$key]);
        }
    endforeach;
    file_put_contents(__DIR__ . '/../Data/users.json', json_encode($currentUserList));
    header('Location:/?f=showHome');
}

function json_Original()
{
    $usersOriginais = [
        ["username" => "Rodrigo", "email" => "Rodrigo@hotmail.com", "password" => "sourodrigo"],
        ["username" => "Beatriz", "email" => "beatriz@hotmail.com", "password" => "soubeatriz"],
        ["username" => "Gabriel", "email" => "Gabriel@hotmail.com", "password" => "sougabriel"]
    ];
    $json_Original = json_decode(file_get_contents(__DIR__ . '/../Data/users.json'), true);

    foreach ($usersOriginais as $key => $value) {
        $value['id'] = $key;
        $usersOriginais[$key] = $value;
    }
    if (isset($json_Original) && count($json_Original, COUNT_RECURSIVE) < 13 || $json_Original == NULL) {
        $json_Original = $usersOriginais;
        file_put_contents('./Data/users.json', json_encode($json_Original));
    }
}

function edit_User($param)
{
                $infoOld = list_Users();
                $userNew = $_POST['username'];
                $passNew = $_POST['password'];
                $emailNew = $_POST['email'];
                $idNew = $_POST['id'];
                    if (empty($userNew) || empty($passNew) || empty($emailNew)) {
                        include_once __DIR__.'/../Template/Users/edit.php';
                        echo "Não é possível deixar dados em branco";
                    } else {
                    foreach($infoOld as $key => $value) {
                        $idOld = $value['id'];
                            if($idOld == $idNew) {
                            $value['username'] = $userNew;
                            $value['password'] = $passNew;
                            $value['email'] = $emailNew;
                            $infoOld[$key] = $value;
                            file_put_contents('./Data/users.json',json_encode($infoOld));

                    }}}

                            header('Location:/?f=showHome');

            };


            
                ?>