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

<h1>Bem vindo, <?php include_once INCLUDE_PATH . './Services/session_service.php';
                if (isset($_SESSION['username'])) {
                    echo ($_SESSION['username']);
                } else
                    echo ("visitante");

                // echo ($_SESSION['login'] ? $_POST['username'] : "visitante") 
                ?> </h1>
<a href="/?f=createUserForm"> Adicionar</a>
<a href="/?f=deleteForm"> Deletar</a> 

<ul>

    <?php
    function showUsers()
    {
        include_once INCLUDE_PATH . '/Services/user_service.php';
        $userList = list_Users();
        ?> <ol> <?php
        foreach ($userList as $key => $value) {
    ?> <li>
                <?php
                print_r($value['username']);
                
                ?>
            </li>
    <?php } ?> 
            </ol>           

            <?php }

    showUsers();
    ?>




</html>