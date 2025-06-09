<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="/src/assets/WhatsApp_Image_2025-04-01_at_11.16.31-removebg-preview.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins:wght@400&display=swap" rel="stylesheet">
    @vite(['resources/css/login.css'])

</head>

<body>
    <div class="container">
        <div class="left">
            <div class="decoracao">
                <div class="forma1"></div>
                <div class="forma forma2"></div>
                <div class="forma forma3"></div>
                <div class="forma forma4"></div>
                <div class="forma5"></div>
            </div>
        </div>
        <div class="right">
            <div class="form">
                <h1>AutoAbout</h1>
                <h2 class="texto1">Login</h2>
                <input type="text" class="text" id="text" placeholder="" required>
                <h2 class="texto2">Senha</h2>
                <input type="password" class="senha" id="senha" placeholder="" required>
                <p>Não tem uma conta?<a href="cadastro.html"> Registre-se</a></p>
                <button class="botao" onclick="validarEmail(); validarSenha();">Entrar</button>
            </div>
        </div>
    </div>
</body>

</html>