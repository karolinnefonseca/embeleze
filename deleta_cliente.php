<?php
include("conexao.php");
$delete_id=$_GET['del'];
$id_usuario=$_GET['edi'];
$delete_query="delete from cliente WHERE id_cliente='$delete_id'";
$run=mysqli_query($con,$delete_query);
if($run)
{
	echo "<script>alert('Cliente excluído com sucesso!')</script>";
    echo "<script>window.open('clientes_cadastrados.php?edi=$id_usuario','_self')</script>";
}

?>