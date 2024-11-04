<?php
require("PHPMailer-master/src/PHPMailer.php");
require("PHPMailer-master/src/SMTP.php");
 $mail = new PHPMailer\PHPMailer\PHPMailer();
 $mail->IsSMTP(); // enable SMTP
 $mail->SMTPDebug = 3; // debugging: 1 = errors and messages, 2 = messages only
 $mail->SMTPAuth = true; // authentication enabled
 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
 $mail->Host = "mail.rrortolabor.com.br";
 $mail->Port = 587; // or 587
 $mail->IsHTML(true);
 $mail->Username = "equiperrortolabor@rrortolabor.com.br";
 $mail->Password = "Liposo26*";
 $mail->SetFrom("equiperrortolabor@rrortolabor.com.br");
 $mail->AddAddress("equiperrortolabor@rrortolabor.com.br");
include("conexao.php");
$user_id=$_GET['faturamento'];
$user_data=$_GET['data']; 
$view_users_query="SELECT faturamento.id_faturamento,faturamento.email,faturamento.codcliente, cliente.nome_dentista, faturamento.paciente,SUM(faturamento.valoraberto) as valoraberto, faturamento.data FROM faturamento INNER JOIN cliente ON faturamento.codcliente = cliente.coddentista WHERE faturamento.codcliente='$user_id'  AND faturamento.data='$user_data' group by faturamento.codcliente,faturamento.paciente,faturamento.tiposervico";	
$run=mysqli_query($con,$view_users_query);

$nome =('nome_dentista');
$email = ('email');
$assunto = "RROrtalabor faturamento";
$arquivo = base64_encode('boleto');
$mensagem ="Segue os anexos com as compras e os boletos do faturamento";

	$to = $email;
	$subject = $assunto;
	$txt = $mensagem;
	$anexo=$arquivo;
	$headers = "From: equiperrortolabor@rrortolabor.com.br";


	$sentmail = mail($to,$subject,$txt,$headers,$anexo);;
	 if($sentmail)
        {
            echo "
            <script language='JavaScript'>
            window.alert('Fatura do cliente $nome foi enviado com sucesso. Em breve entraremos em contato')
            window.location.href='contato.php';
            </script>";
        }
        else
        {
            echo "
            <script language='JavaScript'>
            window.alert('Fatura do cliente $nome não foi enviada. Tente novamente mais tarde')
            
            </script>";
        }
	

?>



