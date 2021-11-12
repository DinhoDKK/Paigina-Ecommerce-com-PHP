<head>
    <meta charset="UTF-8">
    <title>Trabalho Web II</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col align-self-start">
            </div>
            <div class="col align-self-center">
                <h2>Cadastro de Usuario</h2>
            </div>
            <div class="col align-self-end">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">


                <label for="nome">Nome</label><br>
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o Nome">

                <label for="sobreNome">SobreNome:</label><br>
                <input type="text" id="sobreNome" class="form-control" name="sobreNome" placeholder="Digite o SobreNome">

                <label for="cpf">Cpf:</label><br>
                <input type="number" id="cpf" class="form-control" name="cpf" placeholder="Digite o Codigo">

                <label for="dataNascimento">Data nascimento:</label><br>
                <input type="text" id="dataNascimento" class="form-control" name="dataNascimento" placeholder="Digite o Tipo Longadouro">

                <label for="cep">Cep:</label><br>
                <input type="number" id="cep" class="form-control" name="cep" placeholder="Digite o Cep">


                <label for="rua">Rua:</label><br>
                <input type="text" id="rua" class="form-control" name="rua" placeholder="Digite a Rua">

                <label for="bairro">Bairro:</label><br>
                <input type="text" id="bairro" class="form-control" name="bairro" placeholder="Digite o Bairro">

                <label for="email">Email:</label><br>
                <input type="email" id="email" class="form-control" name="email" placeholder="Digite o Email">

                <label for="Telefone">Telefone</label><br>
                <input type="number" id="Telefone" class="form-control" name="Telefone" placeholder="Digite o Telefone">

                <label for="telefoneRecado">Telefone Recado</label><br>
                <input type="number" id="telefoneRecado" class="form-control" name="telefoneRecado" placeholder="Digite o Telefone">

                <input type="submit" class="btn btn-primary" value="Cadastrar">
                <a href="chuteiras.html" class="btn btn-primary">Voltar</a>
            </form>

        </div>
    </div>
</body>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   

    $nome = $_REQUEST['nome'];
    $sobreNome = $_REQUEST['sobreNome'];
    $cpf = $_REQUEST['cpf'];
    $dataNascimento = $_REQUEST['dataNascimento'];
    $cep = $_REQUEST['cep'];

    $rua = $_REQUEST['rua'];
    $bairro = $_REQUEST['bairro'];
    $email = $_REQUEST['email'];
    $Telefone = $_REQUEST['Telefone'];

    if (empty($nome) or strstr($nome, ' ')) {
        echo ("<h1>Preencha o campo nome</h1> <br>");
    } else if (empty($sobreNome) or strstr($sobreNome, ' ')) {
        echo ("<h1>Preencha o campo sobrenome</h1> <br>");
    } else if (empty($cpf) or strstr($cpf, ' ')) {
        echo ("<h1>Preencha o campo cpf</h1> <br>");
    } else if (empty($dataNascimento) or strstr($dataNascimento, ' ')) {
        echo ("<h1>Preencha o campo data nascimento</h1> <br>");
    } else if (empty($cep) or strstr($cep, ' ')) {
        echo ("<h1>Preencha o campo cep</h1> <br>");
    } else if (empty($rua) or strstr($rua, ' ')) {
        echo ("<h1>Preencha o campo rua</h1> <br>");
    } else if (empty($bairro) or strstr($bairro, ' ')) {
        echo ("<h1>Preencha o campo bairro</h1> <br>");
    } else if (empty($email) or strstr($email, ' ')) {
        echo ("<h1>Preencha o campo email</h1> <br>");
    } else if (empty($Telefone) or strstr($Telefone, ' ')) {
        echo ("<h1>Preencha o campo Telefone</h1> <br>");
    } else if (strlen($cpf) > 11) {
        echo ("O campo cpf deve ter no maximo 11 caractres numeriocos. <br>");
    } else if (preg_match('/[^a-z]/i', $nome)) {
        echo ("<h1>Campo Nome invalido volte e digite novamente</h1>");
    } else if (preg_match('/[^a-z]/i', $sobreNome)) {
        echo ("<h1>Campo sobreNome invalido volte e digite novamente</h1>");
    } else {
        $usuario = array(
            "Usuario Cadastrado com Sucesso: " ,"Nome: " . $nome, "SobreNome: " . $sobreNome, " Cpf: " . $cpf, " Data Nascimento: " . $dataNascimento," Cep: " . $cep, "Rua: " . $rua, " Bairro: " . $bairro, "Email: " . $email, " Telefone: " . $Telefone
        );

        foreach ($usuario as $dadosPreenchidos) {
            
            echo "<div class='row'>  <h2>$dadosPreenchidos</h2> </div>";
        }
    }
}
?>