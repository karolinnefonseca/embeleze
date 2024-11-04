<?php
include("conexao.php");
$delete_id=$_GET['del'];
$delete_query="delete from caixa WHERE id='$delete_id'";
$run=mysqli_query($con,$delete_query);
if($run)
{
	echo "<script>alert('Item excluído com sucesso!')</script>";
    echo "<script>window.open('caixa_cadastrado.php','_self')</script>";
}

?>