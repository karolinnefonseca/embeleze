<?php
include("conexao.php");
if(isset($_POST['editar']))
{
	$user_id=$_POST['edi'];	
	$user_id_agenda=$_POST['agenda'];	
    $user_nome=$_POST['nomecliente'];
	$user_servico=$_POST['servico'];
	$user_data=$_POST['data'];
	$user_telefone=$_POST['tel'];
	$user_obs=$_POST['obs'];

//insert the user into the database.
    $insert_user="UPDATE agenda SET id_agenda='$user_id_agenda', nome_cliente='$user_nome',data_agenda='$user_data', servico='$user_servico',obs='$user_obs',telefone='$user_telefone' where id_agenda='$user_id_agenda'";
    if(mysqli_query($con,$insert_user))
    {
    	echo "<script>alert('A agenda do cliente $user_nome do serviço $user_servico foi atualizada com sucesso.')</script>";
        echo"<script>window.open('form_consultar_agenda.php?edi=$user_id','_self')</script>";																												

	}
	else{
	echo "<script>alert('A agenda do cliente $user_nome do serviço $user_servico não foi atualizada, contate o administrador do sistema')</script>";
	echo"<script>window.open('form_consultar_agenda.php?edi=$user_id','_self')</script>";	
	}

}


?>