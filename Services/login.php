<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de login.</title>   
</head>
<body>
    
</body>
<form action="http://localhost:8000/?f=loginSession" method="POST">
        <h2>Área de Login:</h2>
    <label>Usuário</label>
        <input type="text" name="username">
    <label>Senha</label>
        <input type="password" name="password">
    <!-- <label>E-mail</label>
        <input type="text" name="email"> -->

    <input type="submit" value="Enviar">

</form>
</html>
