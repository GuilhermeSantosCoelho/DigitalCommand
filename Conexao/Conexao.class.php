  <?php

	class CONEXAO{

	  	function CONEXAO(){
	  		$this->Conecta();
	  	}

	  	function Conecta(){

	  		$this->link = mysqli_connect('localhost','root','root','DigitalCommand');

	  		if (!$this->link){
	  			die("Problema na Conexão com o Banco de Dados");
	  		}
	  	}

		function Desconecta(){
	  		return mysql_close($this->link);
	  	}

		function Consulta($consulta){
	        $this->consulta = $consulta;

	  		if ($resultado = mysqli_query($this->link,$this->consulta)){
	  			return $resultado;
			} else {
	  			return 0;
	  		}
	  	}
	}
		
 ?>