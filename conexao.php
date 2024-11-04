<?php
$servidor = '127.0.0.1';
$usuario = 'root';
$senha = '';
$banco = 'controle_embelez';
$con = new mysqli($servidor, $usuario, $senha, $banco);
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}
if(isset($_POST['deslogar']))
{
session_destroy();
echo "<script>window.location.href='index.php'</script>";
exit();
}

 ?>

