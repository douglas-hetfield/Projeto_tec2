<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="view/images/img-01.png" alt="IMG">
				</div>

                <form class="login100-form validate-form" action="controller/UserController.php" method="POST">
                    <input type="hidden" name="action" id="action" value="login">
					<span class="login100-form-title">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" id="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" id="pass" name="pass" placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="text-center">
						<input  type="checkbox" id="hasCookie" name="hasCookie">
						<label for="hasCookie">Manter conectado</label>
						<br>
 						<button class="glow-on-hover" type="submit">Salvar</button>
					</div>
					
					
					

					<div class="text-center p-t-136">
						<a class="txt2" href="index.php?url=signUp">
							Criar nova conta
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>