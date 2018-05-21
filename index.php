<?php
	include("conexao.php");
	$consulta = "SELECT * FROM produto_servico";
	$con = $mysqli->query($consulta) or die($mysqli->error);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Farol</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Farol - Portal de voz</h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th>Nº do chamado</th>
								<th>Local</th>
								<th>Nome do responsável</th>
								<th>Status do chamado</th>
								<th>Tipo do chamado</th>
								<th>Abertura</th>
								<th>Tempo decorrido</th>
							</tr>
						</thead>
						<tbody>
							<?php while($dado = $con->fetch_array()){ ?>
								<tr>
									<td><?php echo $dado["ID_PRODUTO_SERVICO"]; ?></td>
									<td></td>
									<td><?php echo $dado["DES_PRODUTO_SERVICO"]; ?></td>
									<td><?php echo $dado["VALOR"]; ?></td>
									<td>Voz</td>
									<td>Analógico</td>
									<td></td>
									
								</tr>
							<?php } ?>
						</tbody>
					 </table>
				</div>
			</div>		
		</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>