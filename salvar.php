<?php  
$descricao = $_POST['descricao'];
$conteudo = $_POST['conteudo'];
$dataEnvio = $_POST['DataEnvio'];

$conecta = new mysqli("localhost","kinyxapp_app","12345","kinyxapp_wyllian");
// Caso a conexão seja reprovada, exibe na tela uma mensagem de erro
if (!$conecta) die ("<h1>Falha na coneco com o Banco de Dados!</h1>");
// Caso a conexão seja aprovada, então conecta o Banco de Dados.    
//$db = mysql_select_db($conecta, "wyllian");


//$cria = "CREATE TABLE usuarios (codigo INT AUTO_INCREMENT PRIMARY KEY, usuario VARCHAR(40), senha VARCHAR(50))";
//mysqli_query($conecta, $cria);

$sql = "INSERT INTO noticia (descricao, conteudo, dataEnvio ) VALUES ('$descricao', '$conteudo', '$dataEnvio')";
mysqli_query($conecta, $sql);

if ($result = $conecta->query("SELECT DATABASE()")) {
    $row = $result->fetch_row();
    printf("Default database is %s.\n", $row[0]);
    $result->close();
}
//$conecta->select_db("kinyxapp_wyllian");




mysqli_close($conecta);

/* ESTE AQUI É O MD5
<?php
if(isset($_POST["txtValor"])){
$string = $_POST["txtValor"];
echo md5($string);
}
?>
*/
/*
//conexão com o servidor
$conecta = new mysqli("localhost","kinyxapp_app","12345","kinyxapp_wyllian");
// Caso a conexão seja reprovada, exibe na tela uma mensagem de erro
if (!$conecta) die ("<h1>Falha na coneco com o Banco de Dados!</h1>");
// Caso a conexão seja aprovada, então conecta o Banco de Dados.    
$db = mysql_select_db($conecta, "wyllian");
$sql = "SELECT usuario , senha FROM usuarios" ;
$query = mysqli_query ($conexao, $sql);
$array = mysqli_fetch_array($query);


if($usuario == "" || $usuario == null){
    echo'Preencha o login';
}



mysqli_close($conect);
*/
?>