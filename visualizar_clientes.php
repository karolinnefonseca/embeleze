
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Nome do cliente</title>
      <!-- Favicon -->
	<link rel="shortcut icon" href="img/novato.png" type="image/x-icon">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="../css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="../css/style_indicadores.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="../css/responsive.css">
	 <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	   <script src="../../js/index.js"></script>
  <script src="../../js/main.js"></script>
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
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-separator"></i><span>Menu</span></li>
                     <li class="active"><a href="form_clientes.html" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Visualizar dados</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a></li>
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
                     <a href="index.html" class="logo">
                     <img src="../img/logo_indicadores.png" class="img-fluid" alt="">
                     <span>Indicadores</span>
                     </a>
                  </div>
               </div>
               <div class="navbar-breadcrumb">
                  <h5 class="mb-0">Pessoa 1</h5>
                  <nav aria-label="breadcrumb">
                     <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Página Inicial</a></li>
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
				<a class="btn btn-outline-danger" href="#" role="button"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a>
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
                                 <img src="../img/ortolaborbg.png" alt="profile-bg" class="rounded img-fluid w-100"/> 
                              </div>
                              <div class="profile-info p-4">
                                 <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                       <div class="user-detail pl-5">
                                          <div class="d-flex flex-wrap align-items-center">
                                             <div class="profile-img pr-4">
                                                <img src="img/dentista.png" alt="profile-img" class="avatar-130 img-fluid" />
                                             </div>
                                             <div class="config_titulo">
                                                <h2>Pessoa 1</h2>
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
						<form>
<!--FORM NOME--> 
 <div class="form-group">
	<label for="exampleFormControlInput1"><b>Nome</b></label>
  <form>
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Nome" disabled>
    </div>
  </div>
</form>
  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputdate"><b>Data de Aniversário</b></label>
      <input input id="inputdate" type="date" class="form-control" disabled>
    </div>
    <div class="form-group col-md-6">
      <label for="fidelidade"><b>Fidelidade</b></label>
      <input input id="fidelidade" type="date" class="form-control" disabled>
    </div>
  </div>
</form>
<form>
  <div class="form-group">
    <label for="exampleFormControlFile1"><b>Foto</b></label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" disabled>
  </div>
</form>

<!--FORM RESPONSAVEL--> 
	<label for="exampleFormControlInput1"><b>Responsável</b></label>
  <form>
  <div class="form-row">
    <div class="formgroup col-md-12">
      <input type="text" class="form-control" placeholder="Nome" disabled>
    </div>
  </div>
</form>
<!--FORM ENDEREÇO--> 
<form>
  <div class="form-group">
    <label for="inputAddress"><b>Endereço</b></label>
    <input type="text" class="form-control" id="inputAddress" disabled>
  </div>
  <div class="form-group">
    <label for="inputAddress2"><b>Complemento</b></label>
    <input type="text" class="form-control" id="inputAddress2" disabled>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity"><b>Cidade</b></label>
      <input type="text" class="form-control" id="inputCity" disabled>
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip"><b>CEP</b></label>
      <input type="text" class="form-control" id="inputZip" disabled>
    </div>
  </div>
  <div class="form-group">
  </div>
</form>
<!--FORM EMAIL--> 
    <label for="exampleFormControlInput1"><b>Email</b></label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com" disabled>
  </div>
<!--FORM PEDIDOS--> 
  <div class="form-group">
    <label for="exampleFormControlSelect1"><b>Pedidos (TIPO DE APARELHO)</b></label>
    <select class="form-control" id="exampleFormControlSelect1" disabled>
      <option>Aparelho1</option>
      <option>Aparelho2</option>
      <option>Aparelho3</option>
      <option>Aparelho4</option>
      <option>Aparelho5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1"><b>Lembretes</b></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled></textarea>
  </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1"><b>Adimplência</b></label>
    <select class="form-control" id="exampleFormControlSelect1" disabled>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div  class="row justify-content-end">
  <a class="btn btn-primary" href="editar_clientes.php">Editar</a>
</div>
</form>
                        </div>
                     </div>
                  </div>

            </div>
         </div>
      </div>
	  </div>
	  </div>

      <!-- Wrapper END -->
      <!-- Footer -->
      <footer  class="bg-white iq-footer">
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
