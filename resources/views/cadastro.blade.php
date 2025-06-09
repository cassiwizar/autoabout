<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="/src/assets/WhatsApp_Image_2025-04-01_at_11.16.31-removebg-preview.png"
        type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins:wght@400&display=swap" rel="stylesheet">
    @vite(['resources/css/cadastro.css'])

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
            {{-- Formulário de Cadastro --}}
            {{-- A action agora aponta para a rota 'cadastro.store' que você definiu para o método POST --}}
            <form action="{{ route('cadastro.store') }}" method="POST">
                @csrf {{-- Necessário para proteção CSRF no Laravel --}}

                <h1>AutoAbout</h1>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <h2 class="texto1">Email</h2>
                <input type="email" class="email" name="email" id="email" placeholder="Digite seu email" required value="{{ old('email') }}">

                <h2 class="texto1">Username</h2>
                <input type="text" class="username" name="username" id="username" placeholder="Digite seu nome de usuário" required value="{{ old('username') }}">

                <h2 class="texto2">Senha</h2>
                <input type="password" class="senha" name="senha" id="senha" placeholder="Crie uma senha" required>

                <button type="submit" class="botao cadastro" id="cadastroBtn">Cadastrar</button>

                {{-- O input type="submit" extra e o link "Voltar" foram removidos para evitar duplicidade e manter o foco no cadastro --}}
                {{-- Se precisar de um link "Voltar", defina a rota corretamente, ex: <a href="{{ route('login') }}">Voltar para o Login</a> --}}

            </form>
        </div>
    </div>
</body>

</html>