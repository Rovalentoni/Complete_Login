<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Usuários</title>
</head>
<body>
<h1>Edição de Usuários</h1>

    <form action="https://localhost:8000/?f=editUser" method="post">
        <ol>

            <?php foreach($currentUsers as $key => $value):
                        ?> <li> 
                                <input type="text" value="<?php echo($value['username']);?>" >
                                <input type="text" value="<?php echo($value['password']);?>" >
                                <input type="text" value="<?php echo($value['email']);?>" >
                                <input type="submit" value="Editar mudanças" >
                                <br><br>
                        </li>
                        <?php endforeach; ?>
                    
                    
                
        </ol>
    </form>
    
</body>

</html>