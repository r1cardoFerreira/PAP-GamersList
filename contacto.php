<?php
require_once 'navbar.php';
?>
	<div  class="row col-12 formback2">
		<form method="post" action="">
			<h2 class="form-titulo"><u>Contacto</u></h2>
			<input class="contact-form" type="email" name="de" required autocomplete="off" placeholder="De:">&nbsp;
			<input class="contact-form" type="text" name="assunto" required placeholder="Assunto:">
                  <br>
			<textarea class="area" name="msg" placeholder='Mensagem ...'></textarea><br>
			<input  class="enviar" type="submit" name="enviar" value="Enviar"><br/><br>	
			
		</form>
	</div>
<?php
$to = 'ricardoferreira1510@outlook.pt';

if(!empty($_POST['de'])){
      $from = $_POST['de'];
      $de ="From: '$from'";
}
if(!empty($_POST['assunto'])){
      $assunto=$_POST['assunto'];
}
if(!empty($_POST['msg'])){
      $msg = $_POST['msg'];
}

if(isset($_POST['enviar'])){
      mail($to,$assunto,$msg,$de);
}
require_once 'footer.php';    
?>