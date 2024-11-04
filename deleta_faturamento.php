<?php
include("conexao.php");
$delete_id=$_GET['del'];
$delete_query="delete from faturamento WHERE id_faturamento='$delete_id'";
$run=mysqli_query($con,$delete_query);
if($run)
{
	echo "<script>alert('Faturamento excluído com sucesso!')</script>";
    echo "<script>window.open('faturamento_cadastrado.php','_self')</script>";
}

?>