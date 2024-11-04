<?php
require("/home/rrorto45/public_html/PHPMailer-master/src/PHPMailer.php");
require("/home/rrorto45/public_html/PHPMailer-master/src/SMTP.php");
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
if(isset($_POST['mensagem']))
{
$nome = $_POST['name'];
$email = $_POST['email'];
$assunto = $_POST['subject'];
$mensagem = $_POST['message'];

	$to = "equiperrortolabor@rrortolabor.com.br";
	$subject = $assunto;
	$txt = $mensagem;
	$headers = "From: $email";


	$sentmail = mail($to,$subject,$txt,$headers);;
	 if($sentmail)
        {
            echo "
            <script language='JavaScript'>
            window.alert('Prezado(a) $nome seu e-mail foi enviado com sucesso. Em breve entraremos em contato')
            window.location.href='contato.php';
            </script>";
        }
        else
        {
            echo "
            <script language='JavaScript'>
            window.alert('Prezado(a)$nome não foi possível enviar um e-mail. Tente novamente mais tarde')
            
            </script>";
        }
	
}
?>



