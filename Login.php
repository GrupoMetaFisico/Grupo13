<?php 

session_start();
include('includes/header.php');
include('includes/modelo.class.php');


if(isset($_REQUEST['user'])){
	$con = new Modelo();
	if( $con->verifyUser($_REQUEST['user'],$_REQUEST['pass']) ){
		$_SESSION['user'] = $_REQUEST['user'];
		var_dump($_SESSION);
		header("Location: /");
	}
}
?>

<br>
<br>
<div class="container center-align">
		<form class="container" action="/Login.php" method="post">
			<div class="row">
				<div class="input-field col s12">
				  <input id="first_name" type="text" class="validate" name="user" required />
				  <label for="first_name">Usuario</label>
				</div>
				<div class="input-field col s12">
				  <input id="last_name" type="password" class="validate" name="pass" required />
				  <label for="last_name">Contraseña</label>
				</div>
			</div>
			<div class="row">
				<button class="btn waves-effect waves-light red accent-2  " type="submit" name="action">Ingresar
					<i class="mdi-content-send right"></i>
				</button>
			</div>
		</form>
		<div class="row">
		<a class="center red-text text-darken-2" href="/register.php"> Si todavia no tenes cuenta, haz click aqui para registrarte</a>

		</div>

</div>

<?php include('includes/footer.php'); ?>