<?php 
        ob_start();
        $numero = $_GET["id"];
	require "php/editarChamado.php";
	
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
	<div class="col-sm-9 col-md-10 affix-content">
		<div class="container">
			<div class="page-header">
				<h3><span class="glyphicon glyphicon-th-list"></span> Editar Chamado</h3>
			</div>
			<form name='formChamado' method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
				<div class="form-group">
					<label for="numero">Número do Chamado:</label>
					<input type="number" class="form-control" id="numero" readonly="true" name="numero" value="<?php echo $numero; ?>" >	
					</div>
				<div class="form-group">
					<label for="data">Data de Questionamento do Chamado:</label>
					<input type="date" class="form-control" id="data" name="data" required>
				</div>
				<div class=text-right>
					<div class="form-group">
						<button type="submit" class="btn btn-default">Salvar</button>
					</div>
				</div>
			</form>
		</div>
	</div>


</body>
</html>
		
