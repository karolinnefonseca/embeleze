<?php
include("conexao.php");
if(isset($_POST['editar']))
{
	$user_id=$_POST['edi'];	
    $user_especificacao_caixa=$_POST['especificao'];
	$user_data_caixa=$_POST['data'];
	$user_competencia_caixa=$_POST['competencia'];
	$user_faturamento= floatval(str_replace(',','.', str_replace('.','', $_POST['faturamento'])));
	$user_despesa_paga=floatval(str_replace(',','.', str_replace('.','', $_POST['despesa_paga'])));
	$user_forma_pagamento=$_POST['forma_pagamento'];
	$user_despesa= floatval(str_replace(',','.', str_replace('.','', $_POST['despesa'])));

//insert the user into the database.
    $insert_user="UPDATE caixa SET especificacao='$user_especificacao_caixa', datacadastro='$user_data_caixa', competencia='$user_competencia_caixa', faturamento='$user_faturamento',despesa='$user_despesa',despesapaga='$user_despesa_paga',formapagamento='$user_forma_pagamento' where id='$user_id'";
    if(mysqli_query($con,$insert_user))
    {
    	echo "<script>alert('A especificação $user_especificacao_caixa foi atualizada com sucesso.')</script>";
        echo"<script>window.open('editar_caixa.php?caixa=$user_id','_self')</script>";																												

	}
	else{
	echo "<script>alert('A especificação $user_especificacao_caixa não foi atualizada, contate o administrador do sistema')</script>";
	echo"<script>window.open('editar_caixa.php?caixa=$user_id','_self')</script>";	
	}

}


?>