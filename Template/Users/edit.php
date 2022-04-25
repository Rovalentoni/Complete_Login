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

    <form action="/?f=editUser" method="post">
        <ul>

            <?php $currentUsers = list_Users();
            foreach ($currentUsers as $key => $value) :
                if ($value['id'] == $_GET['user_id']) {
            ?> <li>
                        <input type="text" name="username" value="<?php echo ($value['username']); ?>">
                        <input type="text" name="password" value="<?php echo ($value['password']); ?>">
                        <input type="text" name="email" value="<?php echo ($value['email']); ?>">
                        <input type="hidden" name="id" value="<?php echo ($_GET['user_id']); ?>">
                        <input type="submit" value="Editar mudanças">
                        <br><br>
                    </li>
            <?php }
            endforeach; ?>



        </ul>
    </form>

</body>

</html>