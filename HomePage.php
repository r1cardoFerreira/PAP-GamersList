<!DOCTYPE html>
<html>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GamersList</title>
<link rel="stylesheet" href="estilos.css">  
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<body>
   <?php include 'navbar.php';?>
    <div class="col-12 pd">
        <center><form action="HomePage.php " method="get">
            
            <input class="barra-pesquisa" type="text" name="pesquisa" autocomplete="off" placeholder="Pesquisa" value=""></div>
            </form></center>
     </div>
     <hr>  
            </div>
            <?php
           	//Estableça a ligação com o mysql ALTERNATIVA AO LOGIN COM INCLUDE
			$ligacao = mysqli_connect("localhost","ricardo","123","gamerslist");
			mysqli_set_charset($ligacao,"utf8");//resolve a questão dos acentos 
			if (!$ligacao) {
				echo "Pesquisa indefenida";
				exit;
			}//Barra de Pesquisa Completa feita por mim
            $pesquisa ="";
            if(!empty($_GET['pesquisa'])){  
                $pesquisa = $_GET['pesquisa'];
            }
            
            if($pesquisa != ""){
                $sql ="SELECT * FROM jogos Where nome_jogo LIKE '%$pesquisa%' OR empresa LIKE '%$pesquisa%' OR categoria1 LIKE '%$pesquisa%' 
                 OR categoria2 LIKE '%$pesquisa%' OR categoria3 LIKE '%$pesquisa%'";
            }
            if($pesquisa == "" || $pesquisa == null){
                $sql = "SELECT * FROM jogos ORDER BY nome_jogo";
            }
            
			$consulta = mysqli_query($ligacao,$sql);
			if (!$consulta) {
				echo "Erro ao realizar a consulta.";
				exit;
			}
			while ($dados = mysqli_fetch_assoc($consulta)) {
                echo "<div class='col-6 respons tam background-jogos'>";
                echo "<div class='row'>";
				echo "<h2 class='gamesname'><b>".$dados["nome_jogo"]."</b></h2><br>";
                echo "<img class='gamesimg' src='".$dados['img']."'>";
				echo "<span class='empresa respons'> <u>Desenvolvedora:</u>     ".$dados["empresa"]."</span><br><br>";
				echo "<span class='gamesyr respons'><u>Data de Lançamento:</u> ".$dados["data_estreia"]."</span><br><br>";
                echo "<span class='gamescat respons'> <u>Categorias:</u> ".$dados["categoria1"]."   ". $dados["categoria2"]."  ".$dados["categoria3"]."</span><br><br>";
				echo "<span class='gamesdesc respons'>".$dados["desc_jogo"]."</span><br><br>";
                echo "</div>";
                echo "<form action='adicionarlista.php' method='post'>";
                echo "<input name='ID' type='hidden' value='".$dados['ID']."'>";
                echo "<input name='nome_jogo' type='hidden' value='".$dados['nome_jogo']."'>";
                echo "<input name='empresa' type='hidden' value='".$dados['empresa']."'>";
                echo "<input name='data_estreia' type='hidden' value='".$dados['data_estreia']."'>";
                echo "<input name='desc_jogo' type='hidden' value='".$dados['desc_jogo']."'>";
                echo "<input name='categoria1' type='hidden' value='".$dados['categoria1']."'>";
                echo "<input name='categoria2' type='hidden' value='".$dados['categoria2']."'>";
                echo "<input name='categoria3' type='hidden' value='".$dados['categoria3']."'>";
                echo "<input class='button-add respons' type='submit' name='submit' value='Adicionar à lista'></form>";  
                echo "</div>";
            }
    
    include 'footer.php';?>
</html>