<?php


function create_User($data)
{

    $currentUserList = json_decode(file_get_contents('./Data/users.json'), true);
    $currentUserList[] = $data;

    print_r($currentUserList);

    file_put_contents(INCLUDE_PATH.'./Data/users.json', json_encode($currentUserList));
}

function list_Users()
{
    return json_decode(file_get_contents('./Data/users.json'), true);
};
