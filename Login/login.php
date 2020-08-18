<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="login.css">
        <title>Login</title>
    </head>
    <body>
        <header></header>
        <main class="modal">
            <form method="POST" action="../Required/loginUsuario.php">
                <div class="registro">
                    <h1>Login</h1><br>
                </div>
                <div class="pedaco"> 
                    <label for="email">Email:</label><br>
                    <input class="input" type="email" name="email" id="email" required><br>
                </div>
                <div class="pedaco">
                    <label for="password">Senha:</label><br>
                    <input class="input" type="password" name="password" id="password" required><br>
                </div>
                <div class="links">
                    <p><a href="#">Esqueceu a senha?</a></p>
                    <p><a href="../CreateUsuario/createUsuario.php">Cadastre-se aqui</a></p>
                </div>
                <div class="botao">
                    <input class="botao-configurado" type="submit" value="Entrar">
                </div>
            </form>
        </main>
        <footer>
            <div class="copy">&copy 2020</div>
        </footer>
    </body>
</html>