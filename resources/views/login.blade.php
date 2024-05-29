<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/login.css">

    <script src="/js/login.js"></script>
</head>

<body>

    <div id="ctf_master">
        <div class="container">
            <div class="box_master">

                <div class="box_login_left">
                    <img class="img_login" src="/img/money-login.png" alt="Imagem">
                    <p class="p_conta">Criar conta</p>

                </div>

                <div class="box_login_right">

                    <p class="description">Controle Financeiro</p>
                    <div class="box_login">
                        <form class="form_login">
                            <div class="box_criar_conta">
                                
                            </div>

                            <label for="email">E-mail:</label>
                            <input type="email" id="email" name="email" required>

                            <label for="password">Senha:</label>
                            <input type="password" id="password" name="password" required>

                            <button type="submit">Entrar</button>

                            <p class="p_esqueceu">Esqueceu a senha? <a href="Clique aqui"> Clique aqui!</a></p> 

                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>



</body>

</html>