<?php 
	require "php/validaLogin.php";
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
	<div class="col-sm-12 col-md-12 affix-content">
		<div class="container">
			<div class="page-header">
				<h3><span class="glyphicon glyphicon-th-list"></span> Login</h3>
			</div>
			<form name='formLogin' method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
				<div class="form-group">
					<label for="login">Login:</label>
					<input type="text" class="form-control" id="login" name="login" required>	
					</div>
				<div class="form-group">
					<label for="senha">Senha:</label>
					<input type="password" class="form-control" id="senha" name="senha" required>
				</div>
				
				<div class=text-right>
					<div class="form-group">
						<button type="submit" class="btn btn-default">Logar</button>
					</div>
				</div>
			</form>
		</div>
	</div>


</body>
</html>
		
