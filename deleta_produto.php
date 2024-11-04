<?php
include("conexao.php");
$delete_id=$_GET['del'];
$delete_query="delete from produto WHERE id='$delete_id'";
$run=mysqli_query($con,$delete_query);
if($run)
{
	echo "<script>alert('Produto excluído com sucesso!')</script>";
    echo "<script>window.open('produtos_cadastrados.php','_self')</script>";
}

?>