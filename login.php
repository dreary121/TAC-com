<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<title>TAC.com</title>
</head>
<body class="login">
				<header>
						<div class="menu">
										<img src="img/logo.png">
										    <nav>
											<ul>
												<li><a href="index.php">Inicio</a></li>
												<li><a href="contactanos.php">Contáctanos</a></li>
													
											</ul>
									</nav>
							</div>	
				</header>
		<div class="log">
			<div class="contenedor">
				<h1>Login</h1>
									<form action="validarusuario.php" method="post">
										<label>Usuario</label>
										<input type="text" name="usuario" placeholder="Ingresar correo" required>

										<label>Contraseña</label>
										<input type="password" name="password" placeholder="Ingresar Contraseña" required>
											<br>
											<input  type="submit" class="button speacial big" value="Regístrate">
											</form>
										<br>
										<span>Olvido su <A href="recuperar.php">Contraseña?</A></span>
										<br>
										<a href="register.php">No tienes una cuenta?</a>
                                    
		    </div>
		</div>
			<footer id="footer">
						<div class="cont">
							<ul class="copyright">
							<li>&copy; UNACH</li>
							<li>Design: LSC</li>		
						</ul>
					</div>
        </div>
				</footer>
</body>
</html>