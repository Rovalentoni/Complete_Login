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
    <label>Usuário
        <input type="text" name="username"></label>
    <label>Senha
        <input type="password" name="password"></label>
    <label>E-mail
        <input type="text" name="email"></label>

    <input type="submit" value="Enviar">

</form>

</html>

