<head>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="estilos.css">
<style>
                @media screen and (max-width: 768px) {
                    .topnav a:not(:first-child), .dropdown .dropbtn {
                        display: none;
                    }
                    .topnav a.icon {
                        float: right;
                        display: block;
                        outline:none;
                    }
                }

                @media screen and (max-width: 768px) {
                    .topnav.responsive {position: relative;}
                    .topnav.responsive .icon {
                        position: absolute;
                        right: 0;
                        top: 0;
                }
                .topnav.responsive a {
                    float: none;
                    display: block;
                    text-align: left;
                    position:relative;
                }
                .topnav.responsive .dropdown {float: none;}
                .topnav.responsive .dropdown-content {position: relative;}
                .topnav.responsive .dropdown .dropbtn {
                    display: block;
                    width: 100%;
                    text-align: center;
                    position: relative;
                }
                }
            </style>
</head>
<body>
<?php 
session_start();
if(isset($_SESSION['nome'])){
    $utilizador = $_SESSION['nome'];
    $loggedin = True;
}
else $loggedin = FALSE;
if($loggedin){
echo <<<_END
    <div class="row">
    <div class="topnav" id="Topnav">	
        <center> 
            <a class="logo" href="HomePage.php"><img src="imagens/logotipo.png"></a>	
            <a class="nvtext" href="Notícias.php">Notícias</a>
            <a class="nvtext" href="Recomendados.php">Recomendados</a> 
            <a class="nvtext" href="perfil.php">Perfil</a>  
            <a class="nvtext" href="sair.php">Sair</a>
            <a href="javascript:void(0);" style="font-size:24px;outline:none;" class="icon" onclick="Menu_Mobile()">&#9776;</a>
    </center>
    </div>
</div>
<script>
      function Menu_Mobile() {
        var x = document.getElementById("Topnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
          }
</script>
_END;
}else{
echo <<<_VISIT
   	<div class="row">
		<div class="topnav" id="Topnav">	
            <center> 
				<a class="logo" href="HomePage.php"><img src="imagens/logotipo.png"></a>	
				<a class="nvtext" href="Notícias.php">Notícias</a>
				<a class="nvtext" href="Recomendados.php">Recomendados</a>
                <a class="nvtext" href="Login.php">Entrar/Registar</a>  
                <a href="javascript:void(0);" style="font-size:24px;outline:none;" class="icon" onclick="Menu_Mobile()">&#9776;</a>
        </center>
		</div>
	</div>
    <script>
          function Menu_Mobile() {
            var x = document.getElementById("Topnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
              }
    </script>
_VISIT;
}
?>  