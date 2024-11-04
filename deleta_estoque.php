<?php
include("conexao.php");
$delete_id=$_GET['del'];
$delete_query="delete from estoque WHERE id_estoque='$delete_id'";
$run=mysqli_query($con,$delete_query);
if($run)
{
	echo "<script>alert('Estoque excluído com sucesso!')</script>";
    echo "<script>window.open('estoque_cadastrado.php','_self')</script>";
}

?>