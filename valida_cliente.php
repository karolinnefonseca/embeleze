<?php
header('Content-Type: text/html; charset=utf-8');
include('conexao.php');
$area_id = $_POST['id'];
$sql = "SELECT  nome_dentista FROM cliente WHERE coddentista = $area_id";
$dados = mysqli_query($con,$sql) or die(mysqli_error());
$linha = mysqli_fetch_assoc($dados);
$total = mysqli_num_rows($dados);
if($total > 0) {
        do {
        echo "<input>".$linha['nome_dentista']."</input>";
        }while($linha = mysqli_fetch_assoc($dados));
    }


?>
	