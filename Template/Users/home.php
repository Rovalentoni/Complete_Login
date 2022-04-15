<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Logada.</title>
</head>

<body>

</body>

<h1>Bem vindo, <?php echo ($_SESSION['login'] ? $_POST['username'] : "visitante") ?> </h1>
<a href="/?f=view_user_form>"> Adicionar</a>
<a href="/?f="> Deletar</a>

<ul>

    <?php
        foreach($userList as $key => $value):
            ?> <li>
                <?php 
                    echo($value['username'])
                ?>
            </li>
        <?php endforeach ?>
    ?>

</ul>

</html>