<?php
	if(isset($_GET['error']) && $_GET['error'] == true){
		echo "<script>alert('Erro ao cadastrar, entre em contato com o administrador do sistema.')</script>";
	}
?>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                
				<div class="login100-pic js-tilt" data-tilt>
					<img src="view/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="controller/UserController.php" method="POST">
                    <input type="hidden" name="action" id="action" value="store">
					<span class="login100-form-title">
						Cadastro
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Digite seu nome">
						<input class="input100" type="text" id="name" name="name" placeholder="Nome">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "digite um E-mail valido: ex@abc.xyz">
						<input class="input100" type="email" id="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "A senha é requerida">
						<input class="input100" type="password" name="password" placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="glow-on-hover" type="submit">Salvar</button>
					</div>

					<div class="text-center p-t-136">
					</div>
				</form>
			</div>
		</div>
	</div>
	