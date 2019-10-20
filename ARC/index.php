<!DOCTYPE html>
<html lang="es">
	<head>
		<title>IMControllers - INDEX</title>
		<meta charset="UTF-8">
		<meta name="title" content="imcontrollersweb">
		<meta name="description" content="prototipo001web">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="Public/fwork/css/styles.css" rel="stylesheet">	
		<link  rel="shortcut icon" href="Public/fwork/Img/ico/.ico"/>
	</head>
	<body>
		<section class="auth" id="auth_index">
			<img class="avatar" src="Public/fwork/Img/logo/arclogo.png" alt="LOGO">
			<form  class="login100-form validate-form " method="POST" action="Controllers/SQL/AuthUsuario.php" >
				<input class="form-control input_text_index" type="number" name="cedula" value=""   autocomplete="off"  placeholder="NUMERO DE CÉDULA">
				<input class="form-control input_text_index" type="password" name="psw" value="" autocomplete="off" placeholder="CONTRASEÑA"><br>
				<input class="btn btn-success" type="submit" value="CONTINUAR"><br>
			<a href="#"  onclick="setVisibleform_register_index()" >
			aún no estas registrado? REGISTRATE AQUÍ
			</a><br>
			<a  href="#">Recuperar contraseña</a>
			</form>
		</section>
		<section class="registrer" id="registrer_index">
			
		</section>
		<script type="text/javascript" src="Public/fwork/js/config.js"></script>
	</body>
</html>








