<?php 
if(isset($_POST['submit'])){
    $to = "monicathurne@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['nombre'];
    $last_name = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $alergia = $_POST['alergia'];
    $siono = $_POST['confirmacion'];
    $cuantos = $_POST['cuantos'];
    $subject = "CONFIRMACIÓN DE ASISTENCIA";
    //$subject2 = "Copy of your form submission";
    $message = "NOMBRE........................................ ". $first_name . "\n\n";
    $message .= "APELLIDOS................................... ". $last_name . "\n\n";
    $message .= "EMAIL............................................ ". $from . "\n\n";
    $message .= "TELÉFONO................................... ". $telefono . "\n\n";
    $message .= "ASISTENCIA.................................. ". $siono . "\n\n";
    $message .= "Nº DE COMENSALES.................... ". $cuantos . "\n\n";
    $message .= "ALERGIAS O DIETA ESPECIAL.... ". $alergia . "\n\n";

    //$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

	$headers = "From:" . $from;
	//$headers2 = "From:" . $to;
  	mail($to,$subject,$message);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header('Location: confirmacion.php');//"Muchas gracias por tu confirmación, " . $first_name . ". Recuerda que puedes volver a usar este formulario si tus circunstancias cambian.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>



<!DOCTYPE HTML>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mónica & Boris · Confirmación de Asistencia</title>
		<link rel="stylesheet" type="text/css" href="c/style.css">

		<script src="j/scroll/jquery.min.js"></script>
		<script src="j/fading.js"></script>

		
	</head>

	<body>
		
		<div id="container">
			<h1><a href="monicayboris.html" class="transition">MÓNICA & BORIS</a></h1>




			<div id="form_container">




				<form method="post" action="">
									
					<div id="formbloque1">


						
							<span>
								<h2>Nombre:*</h2>
								<input type="text" id="nombre" name= "nombre" maxlength="250" required/>
							</span>
							<span>
								<h2>Apellidos:*</h2>
								<input type="text" id="apellidos" name= "apellidos" maxlength="250" required/>
							</span> 
							<span>
								<h2>Número de Teléfono: </h2>
								<input type="text" id="telefono" name="telefono" maxlength="250"/> 
							</span> 
							<span>
								<h2>e-mail: </h2>
								<input id="email" name="email" type="email" maxlength="250"/> 
							</span> 
							<span class="solobomon"><h2>Sólo Mónica y Boris tendrán acceso a estos datos</h2></span>
					</div>

					<div id="formbloque2">

						<div id="asistencia" >
							<h2>¿Vas a poder venir a nuestra boda? </h2>
							<ul>
								<li>
									<label class="choice" for="siceremonia">Sí, sólo a la ceremonia</label>
									<input id="siceremonia" name="confirmacion" type="radio" value="Sí voy a ir, pero solo a la ceremonia" required/>
									
								</li>
								<li>
									<label class="choice" for="si">Sí, a la ceremonia y a la celebración</label>
									<input id="si" name="confirmacion" type="radio" value="SÍ, voy a ir" />
									
								</li>
								<li>
									<label class="choice" for="no">No, no voy a poder ir</label>
									<input id="no" name="confirmacion" type="radio" value="NO, no voy a poder ir" />
									
								</li>
						
							</ul> 
							<div id="nopersonas">
								<div id="nopersonastxt">
									<h2>En caso de venir, por favor especifica cuántas personas vais a ser: </h2>
								</div>
								<div id="nopersonasinput">
									<input class="cuantos" type="number" id="cuantos" name= "cuantos" maxlength="1" min="0" max="9"/>
								</div>
							</div>
						</div>		


						<div id="alergiasvegetariano" >
							<h2>¿Sigues alguna dieta o tienes alguna alergia que te impida comer determinados alimentos? </h2>
						</div>
						<div class="alergia">
								<textarea type="text" id="alergia" name="alergia"></textarea> 
							 
						</div>
							
						<div class="buttons">
							    <!--<input type="hidden" name="form_id" value="971293" />-->
							    
								<input id="submit" class="button_text" type="submit" name="submit" value="Enviar"/>
						</div>
					</div>
					
				</form>	

				<div id="chapucilla">
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						
			</div>

			</div>
			
				<a href="monicayboris.html" class="transition"><div class="arrow textout">back</div></a>


		</div>


	</body>
</html>