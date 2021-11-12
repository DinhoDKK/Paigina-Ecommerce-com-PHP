<head>
    <meta charset="UTF-8">
    <title>Formulario Compra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col align-self-start">
            </div>
            <div class="col align-self-center">
                <h2 id="titulo">Formulario da compra:</h2>
            </div>
            <div class="col align-self-end">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">

                <h2> Iforme o endereço da entrega </h2>
                <label for="cidadeEstado">Cidade/Estado: </label>
                <input list="lista" name="cidadeEstado" id="cidadeEstado" class="form-control">
                <datalist id="lista">''
                    <option value="Campo Grande/MS  ">
                    <option value="Caarapó/MS">
                    <option value="Coxim/MS">
                    <option value="Dourados/MS">
                    <option value="Sidrolândia/MS">
                </datalist>

                <label for="cep">Cep:</label><br>
                <input type="number" id="cep" name="cep" class="form-control" placeholder="Digite o CEP">

                <label for="numero">número:</label><br>
                <input type="number" id="numero" name="numero" class="form-control" placeholder="Digite o número da casa">

                <label for="rua">rua:</label><br>
                <input type="text" id="rua" name="rua" class="form-control" placeholder="Digite o nome da rua">

                <label for="bairro">Bairo:</label><br>
                <input type="text" id="bairro" name="bairro" class="form-control" placeholder="Digite o nome da bairro">

                <label for="telefone">Telefone:</label><br>
                <input type="number" id="telefone" name="telefone" class="form-control" placeholder="Telefone para contato">

                <label for="ponto">Ponto de referência</label><br>
                <input type="text" id="ponto" name="ponto" class="form-control" placeholder="Ponto de referência para entrega">

                <h3>Pagamento:</h3>

                <label for="numeroCartao">Numero co catão</label><br>
                <input type="text" id="numeroCartao" name="numeroCartao" class="form-control" placeholder="Digite o numero do cartão">

                <label for="cvv">CVV</label><br>
                <input type="text" id="cvv" name="cvv" class="form-control" placeholder="Digite o codigo de segurança do cartão">

                <label for="parcelas">Digite a quantidade de parcelas até 12 vezes :</label><br>
                <input type="number" id="parcelas" name="parcelas" class="form-control" placeholder="Telefone para contato">

                <!-- <label for="boleto">Se deseja pagar com boleto a vista marque a opção a baixo , e receba o boleto no email cadastrado</label><br>
                <label for="boleto">Boleto</label>
                <input type="radio" id="boleto" name="boleto" placeholder="Telefone para contato"> -->
                <br><br>

                <input type="submit" class="btn btn-primary" value="Realizar Compra">
                <a href="chuteiras.html" class="btn btn-primary">Voltar</a>
            </form>
        </div>
    </div>
</body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   

    $cidadeEstado = $_REQUEST['cidadeEstado'];
    $cep = $_REQUEST['cep'];
    $numero = $_REQUEST['numero'];
    $rua = $_REQUEST['rua'];
    $bairro = $_REQUEST['bairro'];

    $telefone = $_REQUEST['telefone'];
    $ponto = $_REQUEST['ponto'];
    $numeroCartao = $_REQUEST['numeroCartao'];

    $cvv = $_REQUEST['cvv'];
    $parcelas = $_REQUEST['parcelas'];
   
     if (empty($cep) or strstr($cep, ' ')) {
        echo ("<h1>Preencha o cep</h1> <br>");
    }
    
    else if (empty($numero) or strstr($numero, ' ')) {
        echo ("<h1>Preencha o campo numero</h1> <br>");
    } 
    
    else if (empty($rua) or strstr($rua, ' ')) {
        echo ("<h1>Preencha o campo rua</h1> <br>");
    } 
    
    else if (empty($bairro) or strstr($bairro, ' ')) {
        echo ("<h1>Preencha o campo bairro</h1> <br>");
    } 
    
    else if (empty($telefone) or strstr($telefone, ' ')) {
        echo ("<h1>Preencha o campo telefone</h1> <br>");
    } 

    else if(empty($numeroCartao)){
    echo ("<h1>Escolha uma forma de pagamento </h1> <br>");
   }
   else if(!empty($numeroCartao) &&  empty($cvv)){
    echo ("<h1>Digite o codigo de segurança do cartão </h1> <br>");
   }
  
    
    else {
        $dadosCompra = array(
            "Compra Realizada com sucesso, sera entregue no endereço: " ,"Rua: " . $rua, "Numero: " . $numero,  "Bairro: " . $bairro,    "em até 10 dias uteis "   
        );

        foreach ($dadosCompra as $dadosPreenchidos) {
            
            echo "<div class='row'>  <h2>$dadosPreenchidos</h2> </div>";
        }
    }
}
?>
