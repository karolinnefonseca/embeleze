<?php
include("conexao.php");
if(isset($_POST['editarfatura']))
{
	$user_id=$_POST['edi'];	
	$user_fatura_aberta=$_POST['faturaaberta'];	
	$user_data_faturamento=$_POST['data'];
	$user_nome_faturamento=$_POST['nome_dentista'];
	$user_desconto_faturamento=$_POST['desconto'];
	$user_valor_final_faturamento=floatval(str_replace(',','.', str_replace('.','', $_POST['valor_final'])));
	$user_valor_aberto=floatval(str_replace(',','.', str_replace('.','', $_POST['vaberto'])));

//insert the user into the database.
    $insert_user="UPDATE faturamento SET nomecliente='$user_nome_faturamento',desconto='$user_desconto_faturamento',faturaaberto='$user_fatura_aberta', valorpago= valoraberto-valoraberto*'$user_desconto_faturamento'/100 where codcliente='$user_id' and data='$user_data_faturamento'";
    if(mysqli_query($con,$insert_user))
    {
    	echo "<script>alert('A fatura do cliente $user_nome_faturamento foi gerada com sucesso.')</script>";
        echo"<script>window.open('gerar_pdf.php?faturamento=".$user_id."&".'data='.$user_data_faturamento."&".'nome='.$user_nome_faturamento."','_self')</script>";		
		echo "<script>window.top.close();</script>";
	}
	else{
	echo "<script>alert('A fatura do cliente $user_nome_faturamento não foi gerada, contate o administrador do sistema')</script>";
	echo"<script>window.open('faturamento_gerado.php?faturamento=$user_id','_self')</script>";	
	}		
}

?>