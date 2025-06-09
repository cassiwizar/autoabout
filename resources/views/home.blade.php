<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="/src/assets/WhatsApp_Image_2025-04-01_at_11.16.31-removebg-preview.png"
        type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Home</title>
    @vite(['resources/css/home.css'])
</head>

<body>
    <div class="bloco">
        <div class="container">
            <img class="robo" src="WhatsApp_Image_2025-04-01_at_11.16.31-removebg-preview.png"
                alt="Logo de um">
            <h1>Auto About</h1>
           <a href="login.html"> <img class="icone" src="icone-perfil.png" alt=""> </a>
        </div>
        <section class="grid">
            <div class="novo gridL">
                <div class="novo-projeto bloco-projeto" onclick="window.location.href='dragon.html'">
                    <p class="soma">+</p>
                    <p>Novo Projeto</p>
                </div>
            </div>
            <div class="projetos gridR">
                    <div class="meus-projetos bloco-projeto" onclick="window.location.href='projetos.html'">
                        <img src="icone-arquivo.png" alt="" class="arquivo-icon">
                        <p>Meus Projetos</p>
                    </div>
            </div>
        </section>
    </div>
</body>

</html>