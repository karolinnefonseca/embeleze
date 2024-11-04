						    <?php
							include("conexao.php");
							$id = $_GET['edi'];
							$result = "SELECT *FROM usuario where login= '$id' ";
							$resultado = mysqli_query($con, $result);
							$row = mysqli_fetch_assoc($resultado);
							$campos= $row;			
				
				?>
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Movimento de Caixa</title>
      <!-- Favicon -->
	<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="css/style_indicadores.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
	 <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	   <script src="js/index.js"></script>
  <script src="js/main.js"></script>
  <script>
  history.forward();
  function funcaodeslogar()
{
alert("Obrigado por usar o sistema Controle Embelez!");
}
  </script>
   </head>
   <body>
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo">
             <a href="index_embelez.php?edi=<?php echo $campos['login'];?>">
               <img src="img/logo_adm.png" class="img-fluid" alt="">
              
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
					 <li class="active"><a href="form_caixa.php?edi=<?php echo $campos['login'];?>" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Movimento de Caixa</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a></li>
					 
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
                     <span>Indicadores</span>
                     </a>
                  </div>
               </div>
               <div class="navbar-breadcrumb">

                  <h5 class="mb-0">Seja bem vindo(a) <?php echo $campos['nome'];?></h5>
                  <nav aria-label="breadcrumb">
                     <ul class="breadcrumb">
                        <li class=""><a href="index_rr_sistema.php?edi=<?php echo $campos['login'];?>"><i class="fa fa-home" aria-hidden="true"></i> Página Inicial</a></li>
                        <li class=""><i class="fa fa-arrow-right" aria-hidden="true"></i> Área Financeira</a></li>
                        <li class="breadcrumb-item"><i class="fa fa-arrow-right" aria-hidden="true"></i> Cadastrar Movimento de Caixa</a></li>
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
                                 <img src="img/fundo_adm.jpg" alt="profile-bg" class="rounded img-fluid w-100"/> 
                              </div>
                              <div class="profile-info p-4">
                                 <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                       <div class="user-detail pl-5">
                                          <div class="d-flex flex-wrap align-items-center">
                                             <div class="profile-img pr-4">
                                                <img src="img/foto.png" />
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
<form action="inserir_caixa.php" method="POST">
<input type="hidden" name="edi" value="<?php echo $campos['login'];?>"></input>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputdate"><b>Data do pagamento</b></label>
      <input input name="data" id="inputdate" type="date" class="form-control">
    </div>
    <div class="form-group col-md-4">
      <label for="inputdate"><b>Faturamento-Competência</b></label>
      <input input name="competencia" id="inputdate" type="Month" class="form-control">
    </div>
	<div class="form-group col-md-4">
      <label><b>Especificações</b></label>
      <input type="text" name="especificao" class="form-control">
    </div>
	</div>

  <div class="form-row">
	<div class="form-group col-md-4">
      <label><b>Faturamento</b></label>
      <input type="text" name="faturamento" onKeyPress="return(moeda(this,'.',',',event))" class="form-control">
    </div>
	<div class="form-group col-md-4">
      <label><b>Despesa</b></label>
      <input type="text" name="despesa" onKeyPress="return(moeda(this,'.',',',event))" class="form-control">
    </div>
	<div class="form-group col-md-4">
      <label><b>Despesa Paga</b></label>
      <input type="text" name="despesa_paga" onKeyPress="return(moeda(this,'.',',',event))" class="form-control">
    </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
     <label for="exampleFormControlSelect1"><b>Forma de Pagamento</b></label>
    <select class="form-control" name="forma_pagamento">
      <option>CHEQUE</option>
	  <option>DINHEIRO</option>
	  <option>TRANSFERÊNCIA</option>
	</select>
	</div>
	</div>
  <div  class="row justify-content-end">
  <button type="submit" name="salvarcaixa" class="btn btn-success">Salvar</button>
  <div class="ml-1">
  <a href="caixa_cadastrado.php" target="_blank" type="submit" class="btn btn-primary">Pesquisar</a>    
  </div>
  <div class="ml-1">
  <button type="reset" class="btn btn-secondary">Apagar</button>
  </div>
</div>
</form>
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
                  Copyright 2021 <a href="#">Controle Embelez</a> All Rights Reserved.
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer END -->
   </body>
</html>