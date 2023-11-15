<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Página de administrador</title>
  <link rel="stylesheet" href="adm.css">
</head>
<body>
  <header>
    <h1>Página de administrador</h1>
    </header>
  <main>
    <section class="menu">
      <a href="cadastro.php"><button type="button" class="btn">Cadastro de cliente</button></a>
      <a href="sistema.php"><button type="button" class="btn">Lista de clientes</button></a>
      <a href="cad_func.php"><button type="button" class="btn">Cadastro de funcionário</button></a>
      <a href="sistema1.php"><button type="button" class="btn">lista de funcionário</button>
      <a href="cad_produto.php"><button type="button" class="btn">Cadastro de produto</button></a>
      <a href="sistema2.php"><button type="button" class="btn">Lista de produto</button></a>
     
      <a href="login/agendamento-sucesso.php"><button type="button" class="btn">Lista agendamento</button></a>
    </section>
    <section class="conteudo">
      <p>RETORNE A PÁGINA PRINCIPAL</p>
      <a href="index.php">
        <img id="logo" src="download.png" alt="" sizes="" srcset="">
    </section>
  </main>
  <footer>
    <p>Copyright &copy; 2023</p>
  </footer>
</body>
</html>
<style>
#logo{
    width: 100px;
}
body {
    font-family: sans-serif;
    background-image: url(jogo.jpg);
    background-size: cover;
  }
  
  header {
    background-color: #000;
    color: yellow;
    padding: 10px;
  }
  
  main {
    width: 800px;
    margin: 0 auto;
    
  }
  
  section {
    border: 1px solid #ccc;
    padding: 20px;
    
  }
  
  .menu {
    display: flex;
    justify-content: center;
    flex-direction: column;
    color: yellow;
   
  }
  
  .conteudo {
    text-align: center;
    
  }
  
  footer {
    background-color: #ccc;
    padding: 10px;
  }
  
  .btn {
    background-color: #000;
    color: yellow;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    min-width: 100%;

  }

</style>