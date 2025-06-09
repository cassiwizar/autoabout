<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Reservar Mesa - Savor Bistrô</title>
    @vite(['resources/css/reserva.css', 'resources/js/reserva.js'])
</head>
<body>
    <header class="topbar">
        <div class="logo">☰ <strong>SAVOR BISTRÔ</strong></div>
        <div class="user-icon">👤</div>
    </header>

    <main class="container">
        <section class="reserva-box">
            <h1>Reservar mesa</h1>
            <div class="reserva-content">
                <form class="reserva-form">
                    <input type="text" placeholder="Nome">
                    <input type="text" placeholder="Telefone de contato">
                    <input type="date" placeholder="Data da reserva">
                    <input type="time" placeholder="Horário">
                    <input type="number" placeholder="Número de pessoas">
                    <button type="submit">Confirmar reserva</button>
                </form>

                <div class="mapa">
                <p>Escolha sua Mesa no Mapa</p> 
                <div class="restaurant" id="restaurant">
                
            </div>
        </section>
    </main>
</body>
</html>