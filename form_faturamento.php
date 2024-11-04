<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Faturamento</title>
      <!-- Favicon -->
	<link rel="shortcut icon" href="img/usuario.png" type="image/x-icon">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.3/jquery.mask.min.js"></script>
      <!-- Typography CSS -->
      <link rel="stylesheet" href="css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="css/style_indicadores.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
	 <link href="font-awesome.min.css" rel="stylesheet" type="text/css">
	   <script src="js/index.js"></script>
  <script src="js/main.js"></script>
  <script>
  history.forward();
  function funcaodeslogar()
{
alert("Obrigado por usar o sistema RROrtolabor!");
}
  </script>
   </head>
   <body>
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo">
               <a href="https://rrortolabor.com.br/">
               <img src="img/ortolabor.png" class="img-fluid" alt="">
              
               </a>
            </div>
            <div id="sidebar-scrollbar">
			    <?php
							include("conexao.php");
							$id = $_GET['edi'];
							$result = "SELECT *FROM usuario where login= '$id' ";
							$resultado = mysqli_query($con, $result);
							$row = mysqli_fetch_assoc($resultado);
							$campos= $row;			
				
				?>
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-separator"></i><span>Menu</span></li>
					 <li><a href="index_financeiro.php?edi=<?php echo $campos['login'];?>" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Dashboard Financeiro</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a></li>
					 <li><a href="form_caixa.php?edi=<?php echo $campos['login'];?>" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Movimento de Caixa</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a></li>
					 <li class="active"><a href="form_faturamento.php?edi=<?php echo $campos['login'];?>" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Cadastrar Fatura</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a></li>
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
                     <a href="form_cliente.php" class="logo">
                     <img src="../img/logo_indicadores.png" class="img-fluid" alt="">
                     <span></span>
                     </a>
                  </div>
               </div>
               <div class="navbar-breadcrumb">
                  <h5 class="mb-0">Seja bem vindo(a) <?php echo $campos['nome'];?></h5>
                  <nav aria-label="breadcrumb">
                     <ul class="breadcrumb">
                        <li class=""><a href="index_rr_sistema.php?edi=<?php echo $campos['login'];?>"><i class="fa fa-home" aria-hidden="true"></i> Página Inicial</a></li>
                        <li class=""><i class="fa fa-arrow-right" aria-hidden="true"></i> Área Financeira</a></li>
                        <li class="breadcrumb-item"><i class="fa fa-arrow-right" aria-hidden="true"></i> Cadastrar Fatura de Cliente</a></li>
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
				<a class="btn btn-outline-danger" name="deslogar" href="conexao.php" onclick="funcaodeslogar()" role="button"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a>
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
                                             <div class="profile-img pr-4">
                                                <?php echo '<img src="data:image/gif;base64,' . base64_encode($campos['foto']) . '" />';?>
                                             </div>
                                             <div class="config_titulo">
                                                <h2><?php echo $campos['nome'];?></h2>
                                                <p class="m-0 pl-3">Proprietário</p>
                                             </div>
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
<script language="javascript">   
function moeda(a, e, r, t) {
    let n = ""
      , h = j = 0
      , u = tamanho2 = 0
      , l = ajd2 = ""
      , o = window.Event ? t.which : t.keyCode;
    if (13 == o || 8 == o)
        return !0;
    if (n = String.fromCharCode(o),
    -1 == "0123456789".indexOf(n))
        return !1;
    for (u = a.value.length,
    h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
        ;
    for (l = ""; h < u; h++)
        -1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
    if (l += n,
    0 == (u = l.length) && (a.value = ""),
    1 == u && (a.value = "0" + r + "0" + l),
    2 == u && (a.value = "0" + r + l),
    u > 2) {
        for (ajd2 = "",
        j = 0,
        h = u - 3; h >= 0; h--)
            3 == j && (ajd2 += e,
            j = 0),
            ajd2 += l.charAt(h),
            j++;
        for (a.value = "",
        tamanho2 = ajd2.length,
        h = tamanho2 - 1; h >= 0; h--)
            a.value += ajd2.charAt(h);
        a.value += r + l.substr(u - 2, u)
    }
    return !1
}
 </script> 
				 <form name="cadastrarfatura"action="inserir_faturamento.php" method="POST" >
				  <input type="hidden" name="edi" value="<?php echo $campos['login'];?>"></input>
									    <div class="form-row">
										<div class="form-group col-md-4">
										<label for="inputdate"><b>Data de referência</b></label>
										<input input name="data" id="inputdate" type="Month"  class="form-control"/>
										</div>
										
										<div class="form-group col-md-4">
										<label><b>Nome do Cliente</b></label>
										<div class="form" action="" method="post">
										<select class="form-control" name="cod_dentista" id="cod_dentista">
										<option value="" selected = selected>Selecione...</option>
										<?php
										include("conexao.php");
										$resultstatus = "SELECT *from cliente ORDER BY coddentista ASC";
										$resultado = mysqli_query($con, $resultstatus);
										while($dados = mysqli_fetch_array($resultado)){
										$codigo = $dados['coddentista'];
										$nome = $dados['nome_dentista'];
										echo "<option value='$codigo'>$nome</option>";
										}	
										?>	
										</select>
								
                                        </div>
										</div>
										
									   <div class="form-group col-md-4">
										 <label for="exampleFormControlSelect1"><b>Código do Cliente</b></label>
										 <input type="number" readonly="true"id="dentista" name="dentista" class="form-control">
									  </div>
									
  
<script type="text/javascript">
$('#cod_dentista').change(function(){ 
  $('#dentista').val($('#cod_dentista').val());
});
</script>

	</div>

  <div class="form-row">
	<div class="form-group col-md-4">
      <label><b>Paciente</b></label>
      <input  type="text" name="paciente" id="paciente"class="form-control">
    </div>

										<div class="form-group col-md-4">
										<label><b>Tipo de Serviço</b></label>
										<div class="form" action="" method="post">
										<select class="form-control" name="id_servico" id="id_servico">
										<option value="" selected = selected>Selecione...</option>
										<?php
										include("conexao.php");
										$resultstatus = "SELECT *from servico ORDER BY nome ASC ";
										$resultado = mysqli_query($con, $resultstatus);
										while($dados = mysqli_fetch_array($resultado)){
										$codigo = $dados['id'];
										$nome = $dados['nome'];
										echo "<option value='$nome'>$nome</option>";
										}	
										?>
										
										</select>
								
                                        </div>
										</div>

  <div class="form-group col-md-4">
      <label><b>E-mail</b></label>
      <input type="text" name="email" id="email"class="form-control">
    </div>
	</div>
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
      <label><b>Valor do pedido</b></label>
      <input  type="text" id="valor" name="valor" onKeyPress="return(moeda(this,'.',',',event))" class="form-control">
    </div>
<script language="JavaScript" >
function enviardados(){

if(document.cadastrarfatura.desconto.value=="" ||
document.cadastrarfatura.desconto.value.length < 2)
{
alert( "Preencha campo DESCONTO corretamente!" );
document.cadastrarfatura.desconto.focus();
return false;
}


return true;
}

</script>
  <div class="form-group col-md-4">
     <label for="exampleFormControlSelect1"><b>Desconto</b></label>
	<input type="text" name="desconto" id="edtPercentual" class="form-control" required>
  </div>
 <script src="https://cdn.rawgit.com/plentz/jquery-maskmoney/master/dist/jquery.maskMoney.min.js"></script>
<script>
    $(function(){

    $('#valor').on('input', function() {
      calculate();
    });
    $('#edtPercentual').on('input', function() {
     calculate();
    });
    function calculate(){
        var pPos = parseInt($('#valor').val()); 
		let valor = $('#valor').maskMoney("unmasked")[0];
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
<script language="JavaScript" >
function enviardados(){

if(document.cadastrarfatura.aberto.value=="" ||
document.cadastrarfatura.aberto.value.length < 2)
{
alert( "Preencha campo FATURA EM ABERTO corretamente!" );
document.cadastrarfatura.tx_abert.focus();
return false;
}


return true;
}

</script>
   <div class="form-group col-md-4">
     <label for="exampleFormControlSelect1"><b>Valor Total do boleto</b></label>
	 <input type="text" readonly="true" name="valor_final" id="valor_final" class="form-control">
  </div> 
  <div class="form-group col-md-4">
     <label for="exampleFormControlSelect1"><b>Fatura em aberto</b></label>
    <select class="form-control" name="aberto" required>
	  <option></option>
      <option>SIM</option>
	  <option>NÃO</option>
	</select>
	</div>
	</div>
  <div  class="row justify-content-end">
  <button type="submit" name="salvarfaturamento" class="btn btn-success" onclick="return enviardados()">Cadastrar fatura</button>
  <div class="ml-1">
  <a href="faturamento_gerado.php" target="_blank" type="submit" class="btn btn-warning">Gerar fatura</a>    
  </div>
  <div class="ml-1">
  <a href="faturamento_cadastrado.php" target="_blank" type="submit" class="btn btn-primary">Pesquisar</a>    
  </div>
  <div class="ml-1">
  <button type="reset" class="btn btn-secondary">Apagar</button>
  </div>
</div>
</form>
<script>
    function validar() {
    
    var faturaaberto = cadastrarfatura.aberto.value;
 
      if (aberto == "") {
        alert('Favor preencher o combo Fatura em aberto.');
          cadastrarfatura.aberto.focus();
		  return false;
       }
    var faturaaberto = cadastrarfatura.paciente.value;
 
      if (paciente == "") {
        alert('Favor preencher o combo Fatura em aberto.');
          cadastrarfatura.paciente.focus();
		  return false;
       }
</script>
</div>
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
   </body>
</html>