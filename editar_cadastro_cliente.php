<?php
include("conexao.php");
if(isset($_POST['editar']))
{
	$user_id=$_POST['edi'];
    $user_name=$_POST['nomedentista'];
	$user_cod=$_POST['coddentista'];
	$user_data_niver_dentista=$_POST['data_niver_dentista'];
	$user_razaosocial=$_POST['razao_social'];
	$user_cpf=$_POST['cpf'];
	$user_inscricao_estadual=$_POST['inscricao'];
	$user_nome_responsavel=$_POST['nome_responsavel'];
	$user_data_niver_responsavel=$_POST['data_niver_responsavel'];
	$user_telefone=$_POST['tel'];
	$user_email=$_POST['email'];
	$user_email2=$_POST['email2'];
	$user_endereco=$_POST['endereco'];
	$user_complemento=$_POST['complemento'];
	$user_cidade=$_POST['cidade'];
	$user_cep=$_POST['cep'];
	$user_fidelidade=$_POST['fidelidade'];
	$user_data_contrato=$_POST['data_contrato'];
	$user_status=$_POST['status'];
	$user_lembrete=$_POST['lembrete'];


//insert the user into the database.
    $insert_user="UPDATE cliente SET  nome_dentista='$user_name',coddentista='$user_cod',data_niver_dentista='$user_data_niver_dentista',razaosocial='$user_razaosocial',cpf='$user_cpf',inscricaoestadual='$user_inscricao_estadual',nome_responsavel='$user_nome_responsavel',data_niver_responsavel='$user_data_niver_responsavel',telefone_responsavel='$user_telefone',email='$user_email',email2='$user_email2',endereco='$user_endereco',complemento='$user_complemento',cidade='$user_cidade',cep='$user_cep',fidelidade='$user_fidelidade',datacontrato='$user_data_contrato',status='$user_status',lembretes='$user_lembrete' where id_cliente='$user_id'";
    if(mysqli_query($con,$insert_user))
    {
    	echo "<script>alert('Dados do cliente $user_name atualizados com sucesso.')</script>";
        echo"<script>window.open('editar_clientes.php?cliente=$user_id','_self')</script>";																												

	}
	else{
	echo "<script>alert(' Cadastro do cliente $user_name não realizado, contate o administrador do sistema')</script>";
	echo"<script>window.open('editar_clientes.php?cliente=$user_id','_self')</script>";	
	}

}


?>