
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Produtos Cadastrados</title>
      <!-- Favicon -->
	<link rel="shortcut icon" href="img/usuario.png" type="image/x-icon">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

		<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('#listar-produto').DataTable({			
				"processing": true,
				"serverSide": true,
				"ajax": {
					"url": "proc_pesq_produto.php",
					"type": "POST"
				},
				'columnDefs' : [
				//hide the second & fourth column
				{ 'visible': false, 'targets': [0] }
			],
			});
		} 
		);
		
		</script>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-separator"></i><span>Menu</span></li>
                     <li class="active"><a href="#" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Produtos cadastrados</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a></li>
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

                  <h5 class="mb-0">Detalhamento de Produtos Cadastrados</h5>
                  <nav aria-label="breadcrumb">
                     <ul class="breadcrumb">
						<li><i class="fa fa-user-circle-o" aria-hidden="true"></i> Produtos Cadastrados</li>
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
                                            
                                                <h2><i class="fa fa-table" aria-hidden="true"></i> Tabela de produtos</h2>
                                             
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

		<div id="tab-1">
		<div class="card mb-3">
			 <div class="card-body">
			  <div class="table-responsive">
			  <table class="table table-bordered" id="listar-produto" width="100%" cellspacing="0">
			    <thead>
                <tr>
                  <th>Nome do Produto</th>
                  <th>Data do Cadastro</th>
                  <th>Preço de Custo</th>
				  <th>Preço de Venda</th>
				  <th>Editar</th>
				  <th>Excluir</th>
                </tr>
              </thead>

			  <tfoot>
                <tr>
                  <th>Nome do Produto</th>
                  <th>Data do Cadastro</th>
                  <th>Preço de Custo</th>
				  <th>Preço de Venda</th>
				  <th>Editar</th>
				  <th>Excluir</th>
                </tr>
              </tfoot>
			  
			 </table> <!--FIM DA TABELA-->	
			  </div><!--FIM DA TABLE-RESPONSIVE-->	
			  </div><!--FIM DO CARD BODY-->		 
			 </div>	 <!--FIM DO CARD MB3-->
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
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="js/sb-admin.min.js"></script>
    <script src="js/sb-admin-datatables.min.js"></script>
</html>
