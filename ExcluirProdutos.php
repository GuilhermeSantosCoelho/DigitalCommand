<?php

	$Id = $_POST['id'];

	include('Conexao/Conexao.class.php');
	$Obj_Conexao = new CONEXAO();

	$resultado = $Obj_Conexao->Consulta("DELETE FROM Produtos WHERE id = $Id");

	header("Location:ExibirProdutos.php");
	return 'Produto Cadastrado!';	

?>