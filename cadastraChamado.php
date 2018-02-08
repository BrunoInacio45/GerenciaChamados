<?php 
        ob_start();
	require "php/cadastroChamado.php";
?>

<!DOCTYPE html>
<html>
<head lang="pt-br">
        <meta charset="UTF-8">
        <title>Gerencia Chamados</title>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/navbar.css">	
</head>
<body>
	<?php include "php/navbar.php"; ?>
	<div class="col-sm-9 col-md-10 affix-content">
		<div class="container">
			<div class="page-header">
				<h3><span class="glyphicon glyphicon-th-list"></span> Inserir Chamados</h3>
			</div>
			<form name='formChamado' method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
				<div class="form-group">
					<label for="numero">Número do Chamado:</label>
					<input type="number" class="form-control" id="numero" name="numero" required>	
					</div>
				<div class="form-group">
					<label for="data">Data de Questionamento do Chamado:</label>
					<input type="date" class="form-control" id="data" name="data" required>
				</div>
				<div class="form-group">
					<label for="categoria">Categoria</label>
					<select name="categoria" id='categoria' class="form-control">
						<option value='Incidente' selected>Incidente</option>
						<option value='Informação'>Informação</option>
						<option value='Requisição de serviço'>Requisição de serviço</option>
						<option value='Atualização de Distribuição'>Atualização de Distribuição</option>
					</select>    
				</div>
				<div class=text-right>
					<div class="form-group">
						<button type="submit" class="btn btn-default">Enviar</button>
					</div>
				</div>
			</form>
		</div>
	</div>


</body>
</html>
		
