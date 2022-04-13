<form action="" method="POST">

    <label>
        <input type="text" name="username">Usuário</label>
    <label>
        <input type="text" name="password">Senha</label>
    <label>
        <input type="text" name="email">E-mail</label>

    <button type="submit">Salvar</button>

</form>


<?php


function jsonOriginal()
{
    $Users = [
        ["username" => "Rodrigo", "email" => "beatriz@hotmail.com", "password" => "sourodrigo"],
        ["username" => "Beatriz", "email" => "Gabriel@hotmail.com", "password" => "soubeatriz"],
        ["username" => "Gabriel", "email" => "Rodrigo@hotmail.com", "password" => "sougabriel"]
    ];
    file_put_contents('./Data/users.json', json_encode($Users));
}
jsonOriginal();
?>