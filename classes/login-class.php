
<?php

class Login {

    public function criarlogin($titulo, $action) {
        echo "<html>
										<head>
											<meta charset='UTF-8'>
											<!--<meta HTTP-EQUIV='refresh' CONTENT='30'>-->
											<link href='css/login.css' rel='stylesheet' type='text/css' />
											<script type='text/javascript' src='js/body.js'></script>
											
											<title>Sistema de Gerenciamento ED1 - Cine Video</title>
										</head>

				<body>					  
						<!--
								you can substitue the span of reauth email for a input with the email and
								include the remember me checkbox
								-->
								<div class='container'>
									<div class='card card-container'>
										<!-- <img class='profile-img-card' src='img/logosmall.jpg' alt='' /> -->
										<img id='profile-img' class='profile-img-card' src='img/logo.png' />
										<p id='profile-name' class='profile-name-card'></p>
										<form class='form-signin' action = '" . $action . "' method = 'POST'>
											<span id='reauth-email' class='reauth-email'></span>
											<input type='text' id='inputEmail' class='form-control'name = 'login' required autofocus>
											<input type='password' id='inputPassword' name = 'senha' class='form-control' placeholder='Password' required>
											
											<button class='btn btn-lg btn-primary btn-block btn-signin' type='submit'>Entrar</button>
										</form><!-- /form -->

									</div><!-- /card-container -->
								</div><!-- /container -->


						
				</body>
			</html>";
    }

}
