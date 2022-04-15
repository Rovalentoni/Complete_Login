<?php


function create_User($data)
{
    // print_r(strlen($_POST['username']));
    if ($_POST['username'] == "" || strlen($_POST['username'] < 6)) { ?>
        <div class="erro">Erro no envio.</div>
<?php
    } else {
        $currentUserList = json_decode(file_get_contents('./Data/users.json'), true);
        $currentUserList[] = $data;

        // print_r($currentUserList);

        file_put_contents(INCLUDE_PATH . './Data/users.json', json_encode($currentUserList));
    }
};



function list_Users()
{
    // $encodeDecode = json_decode(file_get_contents('./Data/users.json'), true);
    // file_put_contents(INCLUDE_PATH. './Data/users.json', json_encode($encodeDecode));
    return json_decode(file_get_contents('./Data/users.json'), true);
};

?>