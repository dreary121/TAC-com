<?php
session_start();
if(isset($_SESSION['nombreusuario']))
{
	$usuarioSesion=$_SESSION['nombreusuario'];
	$tipoSesion=$_SESSION['tipousuario'];
}
else
{
	$usuarioSesion='';
	$tipoSesion='';
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<title>TAC.com</title>
</head>
<body class="landing">
					<header>
					<div class="menu">
								<img src="img/logo.png">
								<nav>
								<ul>
									<li><a href="index.php">Inicio</a></li>
									<li><a href="reservaboleto/reservaboleto.php">Reservar boleto</a></li>	
									<li><a href="Administracion/administrar.php">Administración</a></li>
									<li><a href="contactanos.php">Contáctanos</a></li>
									<li> 
										<a class="button speacial big">
											<?php
											if($usuarioSesion<>'')
											{
                                                echo $usuarioSesion;
											} 
											else
											{
												echo "Iniciar sesión";
											}
											?>

										</a> 
									</li>
										
								</ul>
							</nav>
							</div>	
						</header>
							<div class="image">
								<div class="container">
										<center> <h1><span>T A C</span></h1> 
											<p><span class="des">Transporte de Autobúses Chiapas</span></p>
											<ul class="actions">
												<br>
												<li><a href="login.php" class="button special big">
												<?php 
													if($usuarioSesion<>'')
													{
														echo $usuarioSesion;
													}
													else{
														echo "iniciar sesión";
													}
														
													?>
													</a>
													</li>
											</ul>
										</center>
							</div>
					</div>
					<footer id="footer">
						<div class="cont">
							<a href="#"><i class="fab fa-facebook"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-instagram"></i></a>
							<ul class="copyright">
								<li>&copy; UNACH</li>
								<li>Design: LSC</li>		
							</ul>
						</div>
					</footer>


</body>
</html> 