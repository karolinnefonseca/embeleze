<?php
include("conexao.php");
$delete_id=$_GET['del'];
$edi=$_GET['edi'];
$delete_query="delete from agenda WHERE id_agenda='$delete_id'";
$run=mysqli_query($con,$delete_query);
if($run)
{
	echo "<script>alert('Serviço agendado excluído com sucesso!')</script>";
    echo "<script>window.open('form_cliente.php?edi=$edi','_self')</script>";
}

?>