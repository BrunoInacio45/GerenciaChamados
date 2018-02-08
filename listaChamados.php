<?php 
    ob_start();
	require "php/listaChamado.php";
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
        <script>
                function deleteRow(i){
                    var linha = document.getElementById('tabela');
                    var colunas = linha.getElementsByTagName('td');
                    document.getElementById('tabela').deleteRow(i)
                    excluiChamado(colunas[0].innerText);
						
                }
                function teste(id){
                    var site = "http://gerenciachamado.dx.am/editar.php?id="
                    var aux = site + id;
                    window.open(aux, "Editar Chamado", "width=400,height=350");  
                }
                
			</script>

</head>
<body>
	<?php include "php/navbar.php"; ?>
	<div class="col-sm-9 col-md-10 affix-content">
		<div class="container">
			<div class="page-header">
				<h3><span class="glyphicon glyphicon-th-list"></span> Chamados Questionados</h3>
			</div>
			
		<div style="overflow-x:auto;">
		<table id="tabela" class="table table-bordered table-striped table-hover">
			<thread>
				<tr>
					<th>Número</th>
					<th>Data de Abandono</th>
					<th>Categoria</th>
				</tr>
			</thread>
			
			<?php
				if($listaChamado != ""){
					foreach ($listaChamado as $chamado){   
						$id = $chamado->numero;
						echo "
							<tr>
								<td>$chamado->numero</td>
								<td>$chamado->data</td>
								<td>$chamado->categoria</td>
                                                                <td width='50'><input type='button' value='Editar' onclick='teste("; echo"$id)'</td>
				                                <td width='50'><a href='php/excluiChamado.php?id=$id'><input type='button' value='Fechado' onclick='deleteRow(this.parentNode.parentNode.rowIndex)'></a></td>
                                
							</tr>      
						";
					}
				}	
				
		
			?>
				
		</table>
		</div>
		<?php
			if ($msgErro != "")
			echo "<p class='text-danger'>A operação não pode ser realizada: $msgErro</p>";
		?>
		</div>
	</div>


</body>
</html>
		
