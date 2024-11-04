<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Faturas em aberto</title>
      <!-- Favicon -->
	<link rel="shortcut icon" href="img/usuario.png" type="image/x-icon">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <!-- Typography CSS -->
      <link rel="stylesheet" href="css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="css/style_indicadores.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
	 <link href="font-awesome.min.css" rel="stylesheet" type="text/css">
	    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
		 <link href="css/sb-admin.css" rel="stylesheet">
	   <script src="js/index.js"></script>
     <script src="js/main.js"></script>
  <script>
  function funcaodeslogar()
{
alert("Obrigado por usar o sistema RROrtolabor!");
}
  </script>
   </head>
   <body>
   <main>
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo">
               <a href="https://rrortolabor.com.br/">
               <img src="img/ortolabor.png" class="img-fluid" alt="">
              
               </a>
            </div>
			    <?php
							
							include("conexao.php");
							$id = $_GET['faturamento'];
							$result = "SELECT faturamento.id_faturamento,faturamento.data,faturamento.codcliente, faturamento.email,faturamento.valoraberto,cliente.nome_dentista,SUM(faturamento.valoraberto) as valoraberto FROM faturamento INNER JOIN cliente ON faturamento.codcliente = cliente.coddentista where codcliente= '$id' and faturamento.faturaaberto='sim' group by faturamento.codcliente";
							$resultado = mysqli_query($con, $result);
							$row = mysqli_fetch_assoc($resultado);
							$campos= $row;	
							
							
				
				?>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-separator"></i><span>Menu</span></li>
                     <li class="active"><a href="#" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Faturas em aberto</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a></li>
                  </ul>
               </nav>
               <div class="p-3"></div>
            </div>
         </div>
         <!-- TOP Nav Bar -->
         <div class="iq-top-navbar">
		 <div class="navbar">
            <div class="iq-navbar-custom">
               <div class="iq-sidebar-logo">
                  <div class="top-logo">

                     </a>
                  </div>
               </div>
               <div class="navbar-breadcrumb">

                  <h5 class="mb-0">Gerar fatura</h5>
                  <nav aria-label="breadcrumb">
                     <ul class="breadcrumb">
						<li><i class="fa fa-usd" aria-hidden="true"></i> Faturamentos em aberto</li>
                     </ul>
                  </nav>
               </div>
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="line-menu half start"></div>
                        <div class="line-menu"></div>
                        <div class="line-menu half end"></div>
                     </div>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  </div>
               </nav>
            </div>
			<div class="float-right">
				<a class="btn btn-outline-danger" href="sair.php" onclick="funcaodeslogar()" role="button"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a>
            </div>
			</div>
         </div>
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body profile-page p-0">
                           <div class="profile-header">
                              <div class="cover-container">
                                 <img src="img/banner2.png" alt="profile-bg" class="rounded img-fluid w-100"/> 
                              </div>
                              <div class="profile-info p-4">
                                 <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                       <div class="user-detail pl-5">
                                          <div class="d-flex flex-wrap align-items-center">                                           
                                                <h2><i class="fa fa-table" aria-hidden="true"></i> Tabela Faturas em aberto</h2>                                 
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-sm-12">
                     <div class="row">
                        <div class="col-lg-12 profile-center">

	<div class="section">
	<div id="horizontalTab">
        <ul>
        </ul>
<form action="editar_cadastro_fatura_gerada.php" method="POST">
 <input type="hidden" name="edi" value="<?php echo $campos['codcliente'];?>"></input>
 <input type="hidden" name="nome_dentista" value="<?php echo $campos['nome_dentista'];?>"></input>
 <input type="hidden" name="faturaaberta" value="NÃO"></input>
 <!-- / INÍCIO DOS DADOS DA TABELA NÚMERO 01------------------------------------------------------------------------------------------------------------------------------------------------------>		
		<div id="tab-1">
		<div class="card mb-3">
			 <div class="card-body">
			  <div class="table-responsive">
			  <table class="table table-striped" class="display" style="width:100%">
			  <thead>
                <tr>
				<th>Código do cliente</th>
                  <th>Nome do cliente</th>
				  <th>Paciente</th>
				  <th>Serviço</th>
				  <th>Data</th>
                  <th>Valor em aberto</th>
                </tr>
              </thead>

			  <tfoot>
                <tr>
				<th>Código do cliente</th>
                  <th>Nome do cliente</th>
				  <th>Paciente</th>
				  <th>Serviço</th>
				  <th>Data</th>
                  <th>Valor em aberto</th>
                </tr>
              </tfoot>
<?php
        include("conexao.php");
		$user_cod=$_GET['faturamento'];	
		$user_data=$_GET['data'];	
        $view_users_query="SELECT faturamento.id_faturamento,faturamento.tiposervico,faturamento.codcliente, cliente.nome_dentista, faturamento.paciente,SUM(faturamento.valoraberto) as valoraberto, faturamento.data FROM faturamento INNER JOIN cliente ON faturamento.codcliente = cliente.coddentista WHERE faturamento.codcliente='$user_cod' AND faturamento.faturaaberto='sim' AND faturamento.data='$user_data' group by faturamento.codcliente,faturamento.paciente,faturamento.tiposervico";	
        $run=mysqli_query($con,$view_users_query);

        while($row=mysqli_fetch_array($run))
        {
			$user_codigo=$row[2];
			$user_nome=$row[3];
			$user_paciente=$row[4];
			$user_servico=$row[1];
			$user_data=$row[6];
			$user_valor=$row[5];
 
        ?>

        <tr>
			
            <td><?php echo $user_codigo;?></td>
			<td><?php echo $user_nome;?></td>
			<td><?php echo $user_paciente;?></td>
			<td><?php echo $user_servico;?></td>
			<td><?php echo $user_data;?></td>
			<td><?php echo number_format($user_valor, 2, ',', '.');?></td>

        </tr>

        <?php } ?>
			    <?php
							
							include("conexao.php");
							$id = $_GET['faturamento'];
							$resultvaberto = "SELECT faturamento.id_faturamento,faturamento.data,faturamento.codcliente, faturamento.email,faturamento.valoraberto,cliente.nome_dentista,SUM(faturamento.valoraberto) as valoraberto FROM faturamento INNER JOIN cliente ON faturamento.codcliente = cliente.coddentista WHERE codcliente= '$id' AND faturamento.faturaaberto='sim' AND faturamento.data='$user_data' group by faturamento.codcliente";
							$resultadovaberto = mysqli_query($con, $resultvaberto);
							$rowvaberto = mysqli_fetch_assoc($resultadovaberto);
							$camposvaberto= $rowvaberto;	
							
							
				
				?>	
			<input type="hidden" name="data" value="<?php echo $camposvaberto['data'];?>"></input>
			<input type="hidden" name="vaberto" id="vaberto" value="<?php echo number_format($camposvaberto['valoraberto'], 2, ',', '.');?>"></input>			
			 </table> <!--FIM DA TABELA-->	
			  </div><!--FIM DA TABLE-RESPONSIVE-->	
			  </div><!--FIM DO CARD BODY-->		 
			 </div>	 <!--FIM DO CARD MB3-->
		</div><!-- / FIM DOS DADOS DA TABELA NÚMERO 01-----------------------------------------------------------------------------> 
		</div><!--FIM DO HORIZONTAL TAB-->	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.3/jquery.mask.min.js"></script>
<script>
jQuery(function($){
  $("#edtPercentual").keyup(function() {
    //Obter o primeiro caractere digitado
    var temp = $(this).val().charAt(0);
    //Verificar se o primeiro caractere inserido é '-'
    if (temp == '-'){
        //Aplica a máscara para números negativos
        $("#edtPercentual").mask("-99,99%", {reverse: true});
    }
    //Verificar se o primeiro caractere inserido é número
    else if (temp.charAt(0).match(/\d/)){
        //Aplica a máscara para números positivos
        $("#edtPercentual").mask("99,99%");
    }
    //Caso o primeiro caractere inserido seja um caractere inválido limpa o value do campo
    else {
       $("#edtPercentual").val('');
    }
  });  
});
</script>
<div class="form-row">
  <div class="form-group col-md-4">
     <label for="exampleFormControlSelect1"><b>Desconto</b></label>
	<input type="text" name="desconto" id="edtPercentual" class="form-control">
  </div>
 <script src="https://cdn.rawgit.com/plentz/jquery-maskmoney/master/dist/jquery.maskMoney.min.js"></script>
<script>
    $(function(){

    $('#vaberto').on('input', function() {
      calculate();
    });
    $('#edtPercentual').on('input', function() {
     calculate();
    });
    function calculate(){
        var pPos = parseInt($('#vaberto').val()); 
		let valor = $('#vaberto').maskMoney("unmasked")[0];
        var pEarned = parseInt($('#edtPercentual').val());
        var perc="";
		var percfinal;
        if(isNaN(valor) || isNaN(pEarned)){
            perc=" ";
			
           }else{
           perc = valor * (pEarned/100).toFixed(2);
		   percfinal = valor - perc;
           }
		  var valorfinal = percfinal.toLocaleString('pt-br', {minimumFractionDigits: 2});
        $('#valor_final').val(valorfinal);
		
    }

});
</script>

   <div class="form-group col-md-4">
     <label for="exampleFormControlSelect1"><b>Valor Total do boleto</b></label>
	 <input type="text" readonly="true" name="valor_final" id="valor_final" class="form-control">
  </div> 
 </div>
  <div  class="row justify-content-end">
  <button type="submit" name="editarfatura" class="btn btn-warning">Gerar fatura</button>
</div> 
</form>

        </div><!--FIM DA SECTION-->
            </div>
         </div>
      </div>
	  </div>
	  </div>
	  </div>

      <!-- Wrapper END -->
      <!-- Footer -->
      <footer class="bg-white iq-footer">
         <div class="container-fluid">
            <div class="row">

               <div class="col-lg-6 text-right">
                  Copyright 2020 <a href="#">R&R Ortolabor</a> All Rights Reserved.
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer END -->
   
    <script src="vendor/datatables/jquery.dataTables.js"></script>
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="js/sb-admin.min.js"></script>
    <script src="js/sb-admin-datatables.min.js"></script>
	</main>
	</body>
</html>
