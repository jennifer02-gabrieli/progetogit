<?php

$conecta = new mysqli("localhost","kinyxapp_app","12345","kinyxapp_wyllian");
// Caso a conexão seja reprovada, exibe na tela uma mensagem de erro
if (!$conecta) die ("<h1>Falha na coneco com o Banco de Dados!</h1>");
// Caso a conexão seja aprovada, então conecta o Banco de Dados.    
//$db = mysql_select_db($conecta, "wyllian");


//$cria = "CREATE TABLE usuarios (codigo INT AUTO_INCREMENT PRIMARY KEY, usuario VARCHAR(40), senha VARCHAR(50))";
//mysqli_query($conecta, $cria);

$sql = "INSERT INTO noticia (descricao, conteudo, dataEnvio ) VALUES ('$descricao', '$conteudo', '$dataEnvio')";
mysqli_query($conecta, $sql);

$sql = "SELECT id, descricao, dataEnvio FROM noticia" ;
$consulta = mysqli_query($conecta, $sql);






?>

 <link href="index.css" rel="stylesheet">

<table style="width:100%">
    
    <tr>
      <th>Código</th>
      <th>Descrição</th> 
      <th>Conteudo</th>
      <th>Data De Envio</th>
      
 


    </tr>
<?php 

while ($linha = mysqli_fetch_array($consulta)) {

echo "<tr>";

echo "<td>";

echo $linha['id']; 

echo "</td>";


echo "<td>";

echo $linha['descricao'];

echo "</td>";

echo "<td>";

echo $linha['conteudo'];

echo "</td>";

echo "<td>";

echo $linha['dataEnvio'];

echo "</td>";

echo "<td>";

echo '<a href="visualizar.php?codNoticia=' . $linha['id']. '"> visualizar </a>';

echo "</td>";

}

?>

  
