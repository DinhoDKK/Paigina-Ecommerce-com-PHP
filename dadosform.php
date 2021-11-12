<head>
    <meta charset="UTF-8">
    <title>Trabalho Web II</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</head>

<body>
    <h2 id="titulo">Formulario Compra</h2>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" id="form1" name="form1">


        <label for="nome">Nome Completo</label><br>
        <input type="text" id="nome" name="nome" placeholder="Digite o Nome Completo"><br> <br>

        <label for="CupomDesconto">Cidade:</label><br>
        <input type="text" id=">CupomDesconto" name="CupomDesconto" placeholder="Digite o Cidade"><br><br>

        <label for="CupomDesconto">Estado:</label><br>
        <input type="text" id=">CupomDesconto" name="CupomDesconto" placeholder="Digite o Estado"><br><br>

        <label for="Preco">Cep:</label><br>
        <input type="number" id="Preco" name="Preco" placeholder="Digite o Cep"><br><br>

        <label for="marca">Rua:</label><br>
        <input type="text" id="marca" name="marca" placeholder="Digite a Rua"><br><br>

        <label for="quantidade">Bairro:</label><br>
        <input type="text" id="quantidade" name="quantidade" placeholder="Digite a Bairro"><br><br>

        <label for="Codigo">Numero:</label><br>
        <input type="number" id="Codigo" name="Codigo" placeholder="Digite o Numero"><br> <br>

        <label for="Descricao">Tipo Longadouro:</label><br>
        <input type="text" id="Descricao" name="Descricao" placeholder="Digite o Tipo Longadouro"><br><br>

        <label for="tamanho">Numero Cartao:</label><br>
        <input type="text" id="tamanho" name="tamanho" placeholder="Digite o Numero Cartao"><br><br>

        <label for="cor">CVV:</label><br>
        <input type="text" id="cor" name="cor" placeholder="Digite o CVV"><br><br>

        <label for="Peso">Telefone Para Contado</label><br>
        <input type="number" id="Peso" name="Peso" placeholder="Digite o Telefone"><br><br>

        <input href="chuteiras.html"  type="submit" value="Envio" >
    </form>
    <a href="chuteiras.html" class="btn btn-primary">
        Voltar
    </a>
</body>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_REQUEST['Codigo'];

    $nome = $_REQUEST['nome'];
    $marca = $_REQUEST['marca'];
    $tamanho = $_REQUEST['tamanho'];
    $cor = $_REQUEST['cor'];
    $quantidade = $_REQUEST['quantidade'];

    $Peso = $_REQUEST['Peso'];
    $Preco = $_REQUEST['Preco'];
    $Descricao = $_REQUEST['Descricao'];
    $CupomDesconto = $_REQUEST['CupomDesconto'];
    // $TempoGarantia = $_REQUEST['TempoGarantia'];


    if (empty($nome) or  empty($marca) or empty($tamanho)) {
        echo ("Preencha todos os campos<br>");
    }else{
        
    }
}
?>

<script>
    function compra(){
        alert("Compra Realizada com sucesso!")
    }
</script>