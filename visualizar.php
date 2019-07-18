<?php

$conecta = new mysqli("localhost","kinyxapp_app","12345","kinyxapp_wyllian");
// Caso a conexão seja reprovada, exibe na tela uma mensagem de erro
if (!$conecta) die ("<h1>Falha na coneco com o Banco de Dados!</h1>");
// Caso a conexão seja aprovada, então conecta o Banco de Dados.    
//$db = mysql_select_db($conecta, "wyllian");

$codigo = $_GET ["codNoticia"];
//$cria = "CREATE TABLE usuarios (codigo INT AUTO_INCREMENT PRIMARY KEY, usuario VARCHAR(40), senha VARCHAR(50))";
//mysqli_query($conecta, $cria);

$sql = "SELECT id, descricao, dataEnvio FROM noticia WHERE id = $codigo" ;
$consulta = mysqli_query($conecta, $sql);
$linha = mysqli_fetch_array($consulta);


?>



<html>
  

    Código: <?php echo $linha['id'] ?>   <br>
    Descrição: <?php echo $linha['descricao'] ?> <br>
    Conteudo: <?php echo $linha['conteudo'] ?>
  
  
  
  
</html>

