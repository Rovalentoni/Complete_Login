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

<h1>Bem vindo, <?php include_once __DIR__ . '/../../Services/session_service.php';
                if (isset($_SESSION['username'])) {
                    echo ($_SESSION['username']);
                } else
                    echo ("visitante");
                ?> </h1>



<ol>
    <?php foreach($users as $key => $value):?> 
        <li> 
            
        <?php $info = $value['username'];
        
                echo $info; ?> 
        <a href="/?f=viewForm&user_id=<?php echo $value['id'];?>"> Detalhes </a>
        <a href="/?f=editForm&user_id=<?php echo $value['id'];?>"> Editar  </a>
        <a href="/?f=deleteUsers&user_id=<?php echo $value['id'];?>"> Deletar </a>

    
    </li>   
 <?php endforeach; ?>

</ol>

<br><br>

<a href="/?f=createUserForm" > -Adicionar</a>

<br><br>

<a href="/?f=logout" > -Logout </a>

</html>