<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container py-3">
    <h2>Login</h2>
    <form action="auth/login.php" method="POST">
        <label for="user" class="form-label">Usuário</label>
        <!-- input:text -->
        <input type="text" name="user" id="user" class="form-control w-25">

        <label for="pass" class="form-label">Senha</label>
        <!-- input:password -->
        <input type="password" name="pass" id="pass" class="form-control w-25">

        <button type="submit" class="btn btn-primary w-25 mt-4">Entrar</button>
        <a href="index.php" class="btn btn-outline-secondary w-25 d-block mt-2">Voltar</a>
    </form>
</body>
</html>