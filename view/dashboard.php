<?php
	if(isset($_GET['authentication']) && $_GET['authentication'] == true){
		echo "<script>alert('Cadastrado com sucesso.')</script>";
	}
	require_once '/DAO/UserDao.php';
	$userDAO = new UserDAO();
	$lista = $userDAO->listarTodos();

?>

<nav class="navbar navbar-dark bg-dark">
	<a class="navbar-brand" href="#">Listagem de pessoas</a>
	
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Alterna navegação">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		<li class="nav-item">
			<a class="nav-link disabled" href="index.php?url=signUp">criar usuário</a>
		</li>
		<li class="nav-item">
			<a class="nav-link disabled" href="#">Logout</a>
		</li>
		</ul>
	</div>
</nav>

<table class="table table-dark myTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
	  <th scope="col">Criado em</th>
	  <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
	<?php
		$count = 0;
	   	foreach ($lista as $l){
			$count++;
			echo "
				<tr class='hoverTable'>
					<th scope='row'>$count</th>
					<td>".$l['name']."</td>
					<td>".$l['email']."</td>
					<td>".$l['created_at']."</td>
					<td>
						<button>Editar</button>
						<button>Deletar</button>
					</td>
				</tr>
			";
	   	}
	?>
  </tbody>
</table>