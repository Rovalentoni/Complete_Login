<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de Cadastro.</title>
</head>
<body>
    
</body>

<form action="http://localhost:8000/?f=createUser" method="POST">
        <h2>Área de Cadastro:</h2>
    <label>
        <input type="text" name="username">Usuário</label>
    <label>
        <input type="password" name="password">Senha</label>
    <label>
        <input type="text" name="email">E-mail</label>

    <input type="submit" value="Enviar">

</form>

</html>



<?php


function jsonOriginal()
{
    $usersOriginais = [
        ["username" => "Rodrigo", "email" => "Rodrigo@hotmail.com", "password" => "sourodrigo"],
        ["username" => "Beatriz", "email" => "beatriz@hotmail.com", "password" => "soubeatriz"],
        ["username" => "Gabriel", "email" => "Gabriel@hotmail.com", "password" => "sougabriel"]
    ];
    $jsonOriginal = json_decode(file_get_contents('./Data/users.json'), true);
    // echo(count($jsonOriginal, COUNT_RECURSIVE));
    // var_dump($jsonOriginal);
    
    if(is_countable($jsonOriginal) && count($jsonOriginal, COUNT_RECURSIVE) < 13 || $jsonOriginal == NULL){
     $jsonOriginal[] = $usersOriginais;
     file_put_contents('./Data/users.json', json_encode($jsonOriginal));
}}
jsonOriginal();
?>