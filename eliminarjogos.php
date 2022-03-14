<?php
include "menu.php";
$ligacao = mysqli_connect("localhost","ricardo","123","gamerslist");
$query ="SELECT nome_jogo FROM jogos";
$result =mysqli_query($ligacao,$query);
?>
			<div class="row col-12 formback2">
				<form method="post" action="eliminarjogos.php" >
			<select class="nome-form" name="nomejogo">
            		<option value="">Selecionar Jogo</option> 
          
            	<?php  while($row1 = mysqli_fetch_array($result)):;?>
            	<option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>

           			 <?php
            		endwhile;?></select>
      			
		
			<br><input type="submit" value="eliminar" class="button" name="elim">
			</form>
				<?php
			if(!empty($_POST['nomejogo'])  || $_POST['nomejogo'] = "Selecionar Jogo"){
				$jogoelim = $_POST['nomejogo'];
			}		
			$jogoelim = "";
			if(isset($_POST['elim'])){	
			$result = "DELETE FROM jogos WHERE nome_jogo = '$jogoelim'";
				$exe= mysqli_query($ligacao,$result);
				echo'<p>Jogo Eliminado com sucesso!	</p>';
			}else{
				
			}
?>
