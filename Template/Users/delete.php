<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar</title>
</head>

<body>
    <h1>Área de Exclusão</h1>
    <ul>
        <form action="http://localhost:8000/?f=deleteUsers" method="POST">
            <?php
            include_once INCLUDE_PATH . '/Services/user_service.php';
            $currentUserList = list_Users();
            // print_r($currentUserList);
            // $idvalue = array();
            $count = 0;
            foreach ($currentUserList as $key => $value) :
            ?> <li><?php echo ($value['username']); $value['id'] = $key; ?>
            
                    <input type="submit" name="deleteBtn" value="Deletar">
                    <input type="text" name="id" value= "<?php echo ($value['id']) ?>">
                   <?php 
                        $currentUserList[$key] = $value;
                        print_r($value);
                   ?>
                   
                </li>
            <?php   
            // $_POST['id'] = $idvalue; var_dump($_POST);
                    // $idvalue[$count++] = $key;
                    
        
        endforeach;print_r($currentUserList); ?>
    </ul>
    </form>
    <?php

    echo ($key);
    ?>

</body>

</html>