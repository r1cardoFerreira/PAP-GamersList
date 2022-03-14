<html>
<head>
	<title>Editar</title>
	<style type="text/css">
		#texto{
			display:block	 ;
			margin-bottom: 1em;
			padding: 5px;
                  width:80%;
                  margin-left:10%;
                  margin-right:10%;
            }

	</style>
</head>
<body>
	<?php
	require_once 'menu.php';
	//recebe os dados a serem editados
            $ID = filter_input(INPUT_POST, 'ID');
		$nome_jogo = filter_input(INPUT_POST, 'nome_jogo');
		$empresa = filter_input(INPUT_POST, 'empresa');
		$data_estreia = filter_input(INPUT_POST, 'data_estreia');
		$desc_jogo = filter_input(INPUT_POST, 'desc_jogo');
            $categoria1 = filter_input(INPUT_POST, 'categoria1');
            $categoria2 = filter_input(INPUT_POST, 'categoria2');
            $categoria3 = filter_input(INPUT_POST, 'categoria3');
            
	?>
	<h2>Alterar os dados</h2>
	<!--chama o ficheiro salvar.php -->
	<form action="salvar.php" method="post">
	 	<input type="hidden"          name="ID" value="<?php echo $ID;?>">
	 	<input type="text" id="texto" name="nome_jogo" value="<?php echo $nome_jogo;?>">
	 	<input type="text" id="texto" name="empresa" value="<?php echo $empresa;?>">
	 	<input type="text" id="texto" name="data_estreia" value="<?php echo $data_estreia;?>">
		<input type="text" id="texto" name="desc_jogo" value='<?php echo $desc_jogo;?>'>
            <input type="text" id="texto" name="categoria1" value="<?php echo $categoria1;?>">
            <input type="text" id="texto" name="categoria2" value="<?php echo $categoria2;?>">
            <input type="text" id="texto" name="categoria3" value="<?php echo $categoria3;?>">
	 	<input type="submit" class="button" id="texto" value="Gravar Alterações">
	</form>
</body>
</html>