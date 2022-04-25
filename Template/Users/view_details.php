<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Usuários</title>
</head>

<body>
    <h1>Detalhes do usuário:
         <?php 
         
         $currentUsers = list_Users();
         foreach($currentUsers as $key => $value) {
            if($value['id'] == $_GET['user_id']){
                echo $value['username'];
            };
         }
         
         ?> . </h1>

    <form action="/?f=showHome" method="post">

            <?php $currentUsers = list_Users();
            foreach ($currentUsers as $key => $value) :
                if ($value['id'] == $_GET['user_id']) {
            ?> <div>
                        <b>Usuário:</b><p><?php echo ($value['username']); ?></p><br>
                        <b>Senha:</b><p><?php echo ($value['password']); ?></p><br>
                        <b>Email:</b><p><?php echo ($value['email']); ?></p><br>
                        <input type="hidden" name="id" value="<?php echo ($_GET['user_id']); ?>">
                        <input type="submit" value="Voltar">
                        <br><br>
                    </div>
            <?php }
            endforeach; ?>



    </form>

</body>

</html>