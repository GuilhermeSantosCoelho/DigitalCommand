<!DOCTYPE html>
<html>
	<head>
		<title>Produtos</title>
		<meta charset="utf-8">
		<style type="text/css">
			table{
				border: 1px black solid;
				border-radius: 10px;
				background-color: #2d9099;
			}
			table td{
				border: 1px black solid;
				padding: 5px 10px 5px 10px;
				border-radius: 10px;
				background-color: white;
				text-align: center;
			}

			#Excluir{
				cursor: pointer;
				color: #b72f2f;
				background: none;
				border:none;
				text-decoration: none;
			}
		</style>
		<?php
			include('Conexao/Conexao.class.php');
			$Obj_Conexao = new CONEXAO();

			$resultado = $Obj_Conexao->Consulta("SELECT * FROM Produtos");
			while ($linha = mysqli_fetch_assoc($resultado)) {
				$Produtos[] = $linha;
			}
		?>
		<script type="text/javascript">
			function excluir(){
				var formulario = document.getElementById('formExcluir');
				formulario.submit();
			}
		</script>
	</head>
	<body>
		<center>
			<h1>Produtos</h1>
			<table>
				<tr>
					<td><h3>Nome</h3></td>
					<td><h3>Preço</h3></td>
					<td><h3>Excluir</h3></td>
				</tr>
				<?php foreach ($Produtos as $Produto): ?>
					<tr>
						<form id="formExcluir" action="ExcluirProdutos.php" method="POST">
							<input type="hidden" name="id" value="<?= $Produto['id'] ?>">
							<td><h3><?= $Produto['Produto'] ?></h3></td>
							<td><h3>R$ <?= $Produto['Preco'] ?></h3></td>
							<td><a  id="Excluir" onclick="excluir()"><h3>Alterar / Excluir produto</h3></a></td>
						</form>
					</tr>
				<?php endforeach ?>
			</table>
		</center>
	</body>
</html>