<?php

	$Produto = $_POST['Produto'];
	$Preco = $_POST['Preco'];

	include('Conexao/Conexao.class.php');
	$Obj_Conexao = new CONEXAO();

	$resultado = $Obj_Conexao->Consulta("INSERT INTO Produtos VALUES(null,'$Produto',$Preco)");

	header("Location:CadastrarProduto.php");
	return 'Produto Cadastrado!';	

?>