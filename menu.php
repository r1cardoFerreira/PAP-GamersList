<head>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<!--<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
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
</head>
<body>
      <div class="row"> 
		<div class="topnav" id="Topnav">	
				<a class="logo"><img src="imagens/logotipo.png"></a>    
                        <a class="nvtext" href="adicionarjogos.php">Adicionar Jogos</a>
                        <a class="nvtext" href="adicionarimg.php">Adicionar imagens</a>	
				        <a class="nvtext" href="eliminarjogos.php">Eliminar Jogos</a>
                        <a class="nvtext" href="editarjogos.php">Editar Jogos</a>
                        <a class="nvtext" href="adicionarempresa.php">Adicionar Empresas</a>
                        <a class="nvtext" href="sair.php">Sair</a>  
                        <a href="javascript:void(0);" style="font-size:24px;outline:none;" class="icon" onclick="Menu_Mobile()">&#9776;</a>
        
		</div>
	</div>
</body>