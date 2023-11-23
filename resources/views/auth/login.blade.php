<!DOCTYPE html>
<html lang="en">
                                                        <!-- ? Header o Encabezado del Sistema -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device=width,initial - scale=1.0">

	  <!-- Favicon -->
	<link href="img/inces.jpg" rel="icon">

	<title>Login</title>

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/estilo.css">

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script type="text/javascript" src="js/validaciones.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
                                						<!-- ? Body o Cuerpo del sistama -->
	<body>
		@include('partials.messages')
		<div class="loginbox">
			<img src="img/yaracuy.png" alt="" class="avatar">
			<h1>Iniciar Sesión</h1>
			<br>

			<!--*Formulario de Iniciar Sesiòn-->
			<form action="/login" method="POST">
				@csrf
				<p>Usuario/Email</p>
				<input type="text" placeholder="Usuario/Email" name="username" autocomplete="off">
				<p>Contraseña</p>
				<input type="password" placeholder="Contraseña" name="password">
				<input type="submit" value="Entrar">

				<!-- <a href="#">Recuparar tu Contraseña</a><br> -->
				{{-- <a href="register">¿No tienes una cuenta?</a> --}}
				<a href="/validacion">¿No tienes una cuenta?</a>

			</form>
			
		</div>

	</body>

</html>