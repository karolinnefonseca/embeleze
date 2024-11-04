<?php
include("conexao.php");
if(isset($_POST['editar']))
{
	$user_id=$_POST['edi'];	
	$user_data_faturamento=$_POST['data'];
	$user_nome_faturamento=$_POST['cod_dentista'];
	$user_codigo_faturamento=$_POST['dentista'];
	$user_paciente_faturamento=$_POST['paciente'];
	$user_servico_faturamento=$_POST['id_servico'];
	$user_valor_faturamento= floatval(str_replace(',','.', str_replace('.','', $_POST['valor'])));
	$user_email_faturamento=$_POST['email'];
	$user_desconto_faturamento=$_POST['desconto'];
	$user_valor_final_faturamento=floatval(str_replace(',','.', str_replace('.','', $_POST['valor_final'])));
	$user_valor_aberto=floatval(str_replace(',','.', str_replace('.','', $_POST['vaberto'])));
	$user_valor_pago=floatval(str_replace(',','.', str_replace('.','', $_POST['vpago'])));

//insert the user into the database.
    $insert_user="UPDATE faturamento SET data='$user_data_faturamento',nomecliente='$user_nome_faturamento',codcliente='$user_codigo_faturamento',
    paciente='$user_paciente_faturamento',tiposervico='$user_servico_faturamento',valor='$user_valor_faturamento',email='$user_email_faturamento',
	desconto='$user_desconto_faturamento',valortotal='$user_valor_final_faturamento',valoraberto='$user_valor_aberto',valorpago='$user_valor_pago' where id_faturamento='$user_id'";
    if(mysqli_query($con,$insert_user))
    {
    	echo "<script>alert('A fatura do cliente $user_nome_faturamento foi atualizada com sucesso.')</script>";
        echo"<script>window.open('editar_faturamento.php?faturamento=$user_id','_self')</script>";																												

	}
	else{
	echo "<script>alert('A fatura do cliente $user_nome_faturamento não foi atualizada, contate o administrador do sistema')</script>";
	echo"<script>window.open('editar_faturamento.php?faturamento=$user_id','_self')</script>";	
	}

}


?>