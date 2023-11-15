<?php
 if(isset($_POST['submit']))
 {
// Incluir o arquivo de conexão com o banco de dados
include_once('config.php');

// Obter os dados do formulário
$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$cor = $_POST["cor"];
$tamanho = $_POST["tamanho"];
$quantidade = $_POST["quantidade"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$imagem = $_FILES["imagem"]["name"];
$codigo_barras = $_POST["codigo_barras"];

// Validar os dados
if (empty($nome)) {
    echo "O nome do produto é obrigatório.";
    exit;
}

if (empty($categoria)) {
    echo "A categoria do produto é obrigatória.";
    exit;
}

if (empty($marca)) {
    echo "A marca do produto é obrigatória.";
    exit;
}

if (empty($modelo)) {
    echo "O modelo do produto é obrigatório.";
    exit;
}

if (empty($cor)) {
    echo "A cor do produto é obrigatória.";
    exit;
}

if (empty($tamanho)) {
    echo "O tamanho do produto é obrigatório.";
    exit;
}

if (empty($quantidade)) {
    echo "A quantidade do produto é obrigatória.";
    exit;
}

if (empty($preco)) {
    echo "O preço do produto é obrigatório.";
    exit;
}

// Inserir o produto no banco de dados
$sql = "INSERT INTO produtos (nome, categoria, marca, modelo, cor, tamanho, quantidade, preco, descricao, imagem, codigo_barras)
VALUES ('$nome', '$categoria', '$marca', '$modelo', '$cor', $tamanho, $quantidade, $preco, '$descricao', '$imagem', '$codigo_barras')";

$resultado = mysqli_query($conexao, $sql);

// Verificar se o produto foi inserido com sucesso
if ($resultado) {
    echo "O produto foi cadastrado com sucesso.";
} else {
    echo "Ocorreu um erro ao cadastrar o produto.";
}

mysqli_close($conexao);
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="cad_produto.php" method="post">
        <input type="text" name="nome" placeholder="Nome do produto">
        <select name="categoria">
            <option value="tenis">Tênis</option>
            <option value="camisas">Camisas</option>
            <option value="calcados">Calçados</option>
            <option value="acessorios">Acessórios</option>
        </select>
        <input type="text" name="marca" placeholder="Marca do produto">
        <input type="text" name="modelo" placeholder="Modelo do produto">
        <input type="text" name="cor" placeholder="Cor do produto">
        <input type="number" name="tamanho" placeholder="Tamanho do produto">
        <input type="number" name="quantidade" placeholder="Quantidade de produtos disponíveis para venda">
        <input type="number" name="preco" placeholder="Preço do produto">

        <textarea name="descricao" placeholder="Descrição do produto"></textarea>
        <input type="file" name="imagem" placeholder="Imagem do produto">
        <input type="text" name="codigo_barras" placeholder="Código de barras do produto">

        <input type="submit" value="submit">
    </form>


</body>
</html>

<style>
    body{
    background-image: url(jogo.jpg);
    background-size: cover ;
    }
    form {
    width: 500px;
    margin: 0 auto;
}

input,
select,
textarea {
    width: 100%;
    padding: 5px;
    margin-bottom: 5px;
    border: 1px solid #050505;
}

textarea {
    height: 200px;
}

input[type="submit"] {
    background-color: #000000;
    color: #e5ff00;
    border: none;
    padding: 10px;
    cursor: pointer;

}

</style>