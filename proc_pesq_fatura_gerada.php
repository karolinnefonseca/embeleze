<?php
$servidor = '127.0.0.1';
$usuario = 'root';
$senha = '';
$banco = 'rrorto45_produto';
$con = new mysqli($servidor, $usuario, $senha, $banco);
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}

//Receber a requisão da pesquisa 
$requestData= $_REQUEST;


//Indice da coluna na tabela visualizar resultado => nome da coluna no banco de dados
$columns = array(
	0 =>'nomecliente', 
	1=> 'valor',
	2=> 'codcliente',
);

//Obtendo registros de número total sem qualquer pesquisa
$result_user = "SELECT faturamento.id_faturamento,faturamento.codcliente, cliente.nome_dentista,SUM(faturamento.valoraberto) as valoraberto, faturamento.data FROM faturamento INNER JOIN cliente ON faturamento.codcliente = cliente.coddentista WHERE faturamento.faturaaberto='sim' group by faturamento.data, faturamento.codcliente";
$resultado_user =mysqli_query($con, $result_user);
$qnt_linhas = mysqli_num_rows($resultado_user);

//Obter os dados a serem apresentados
$result_usuarios = "SELECT faturamento.id_faturamento,faturamento.codcliente, cliente.nome_dentista,SUM(faturamento.valoraberto) as valoraberto, faturamento.data FROM faturamento INNER JOIN cliente ON faturamento.codcliente = cliente.coddentista WHERE faturamento.faturaaberto='sim' group by faturamento.data, faturamento.codcliente";
if( !empty($requestData['search']['value']) ) {   // se houver um parâmetro de pesquisa, $requestData['search']['value'] contém o parâmetro de pesquisa
	$result_usuarios.=" AND ( nomecliente LIKE '".$requestData['search']['value']."%' ";    
	$result_usuarios.=" OR valoraberto LIKE '".$requestData['search']['value']."%' )";
}

$resultado_usuarios=mysqli_query($con, $result_usuarios);
$totalFiltered = mysqli_num_rows($resultado_usuarios);
//Ordenar o resultado
$result_usuarios.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
$resultado_usuarios=mysqli_query($con, $result_usuarios);

// Ler e criar o array de dados
$dados = array();
while( $row_usuarios =mysqli_fetch_array($resultado_usuarios) ) {  
	$dado = array(); 
	$dado[] = $row_usuarios["id_faturamento"];
	$dado[] = $row_usuarios["codcliente"];
	$dado[] = $row_usuarios["nome_dentista"];
	$dado[] = number_format($row_usuarios['valoraberto'], 2, ',', '.');
	$dado[] = $row_usuarios["data"];	
    $dado[] ='<td><a target="_self" href="editar_faturamento_gerado.php?faturamento='.$row_usuarios["codcliente"].'&'.'data='.$row_usuarios["data"].'"?><button class="btn btn-warning btn-hover-green "name="fatura">Gerar fatura</button></a></td>';
	$dados[] = $dado;
}


//Cria o array de informações a serem retornadas para o Javascript
$json_data = array(
	"draw" => intval( $requestData['draw'] ),//para cada requisição é enviado um número como parâmetro
	"recordsTotal" => intval( $qnt_linhas ),  //Quantidade de registros que há no banco de dados
	"recordsFiltered" => intval( $totalFiltered ), //Total de registros quando houver pesquisa
	"data" => $dados   //Array de dados completo dos dados retornados da tabela 
);

echo json_encode($json_data);  //enviar dados como formato json
