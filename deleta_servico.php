<?php
include("conexao.php");
$delete_id=$_GET['del'];
$delete_query="delete from servico WHERE id='$delete_id'";
$run=mysqli_query($con,$delete_query);
if($run)
{
	echo "<script>alert('Serviço excluído com sucesso!')</script>";
    echo "<script>window.open('servicos_cadastrados.php','_self')</script>";
}

?>