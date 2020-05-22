<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>

    <form class="form" action="logar.php" method="POST">
        <div class="card">
            <div class="card-top">
                <img class="imgLogin" src="img/user-img.png" alt="">
                <h2 class="title">Painel de Controle</h2>
                <p>Gerenciar seu Negócio</p>
            </div>

            <div class="card-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Digite seu email" required>
            </div>

            <div class="card-group">
                <label>Senha</label>
                <input type="password" name="senha" placeholder="Digite sua senha" required>
            </div>

            <div class="card-group">
                <label>
                    <input type="checkbox">Lembre-me
                </label>
            </div>

            <div class="card-group btn">
                <button type="submit">Acessar</button>
            </div>
        </div>
    </form>
    
</body>
</html>