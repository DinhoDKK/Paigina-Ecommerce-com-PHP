<head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <header>
        <div class="b-example-divider"></div>

        <header class="p-3 bg-dark text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="chuteiras.html" class="nav-link px-2 text-white">Chuteiras</a></li>
                        <li><a href="bolas.html" class="nav-link px-2 text-white">Bolas de futebol</a></li>
                        <li><a href="acessorios.html" class="nav-link px-2 text-white">Acessorios</a></li>
                    </ul>


                </div>
            </div>
            </div>
        </header>
        <style>
            .quad {
                border: 1px solid black;
                padding: 30px;
                width: 500px;
                text-align: center;
                box-shadow: 5px 5px 5px black;
                background-color: whitesmoke;
                border-radius: 30px;
                margin-left: 430px;
                margin-top: 100px;
            }

            input {
                display: block;
                width: 80%;
                margin-left: 40px;
                margin-bottom: 5px;
            }

            img {
                width: 200px;
                margin: 20px;
            }
        </style>
</head>

<body>
    <div class="quad">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <div>
                <input type="text" name="login" id="login" placeholder="Login">
                <input type="password" name="Senha" id="Senha" placeholder="Senha">
                <input type="submit" name="current" value="Entrar">
                <input type="submit" name="current" value="Criar Conta">
                
            </div>
        </form>
    </div>
</body>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Login = $_REQUEST['login'];
    $Senha = $_REQUEST['Senha'];

    $buttonValeu = $_REQUEST['current'];

    if ($buttonValeu == 'Criar Conta') {
        header('Location: cadastroUser.php');
    } else if (empty($_REQUEST['login']) or empty($_REQUEST['Senha'])) {
        echo ("Preencha todos os campos  <br>");
    } else {
        header('Location: formularioCompra.php');
    }
}
?>