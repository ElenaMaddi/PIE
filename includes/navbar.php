<?php
	require $_SERVER['DOCUMENT_ROOT'] . '/PIE/includes/check_user.php';

	$user = checkUser();
?>

<nav id="nav" class="navbar nav-transparent">
			<div class="container">
				<div class="navbar-header">
					<div class="navbar-brand">
						<a href="/PIE/index.php">
							<img class="logo" src="/PIE/img/logo.svg" alt="logo">
							<img class="logo-alt" src="/PIE/img/logo.svg" alt="logo">
						</a>
					</div>
					<div class="nav-collapse">
						<span></span>
					</div>
				</div>

				<ul class="main-nav nav navbar-nav navbar-right">

<?php
	if ($user == 'admin') { 
?>

					<li><a href="/PIE/index.php">Home</a></li>
					<li class="has-dropdown"><a href="/PIE/pages/carti/carti.php">Carti</a>
						<ul class="dropdown">
							<li><a href="/PIE/pages/carti/adauga-carte.php">Adauga o carte</a></li>
							<li><a href="/PIE/pages/carti/sterge-carte.php">Sterge o carte</a></li>
							<li><a href="/PIE/pages/carti/modifica-carte.php">Modifica o carte</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="/PIE/pages/jucarii/jucarii.php">Jucarii</a>
						<ul class="dropdown">
							<li><a href="/PIE/pages/jucarii/adauga-jucarie.php">Adauga o jucarie</a></li>
							<li><a href="/PIE/pages/jucarii/sterge-jucarie.php">Sterge o jucarie</a></li>
							<li><a href="/PIE/pages/jucarii/modifica-jucarie.php">Modifica o jucarie</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="/PIE/pages/filme/filme.php">Filme</a>
						<ul class="dropdown">
							<li><a href="/PIE/pages/filme/adauga-film.php">Adauga un film</a></li>
							<li><a href="/PIE/pages/filme/sterge-film.php">Sterge un film</a></li>
							<li><a href="/PIE/pages/filme/modifica-film.php">Modifica un film</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="/PIE/pages/muzica/muzica.php">Muzica</a>
						<ul class="dropdown">
							<li><a href="/PIE/pages/muzica/adauga-muzica.php">Adauga</a></li>
							<li><a href="/PIE/pages/muzica/sterge-muzica.php">Sterge</a></li>
							<li><a href="/PIE/pages/muzica/modifica-muzica.php">Modifica</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="/PIE/pages/papetarie/papetarie.php">Papetarie</a>
						<ul class="dropdown">
							<li><a href="/PIE/pages/papetarie/adauga-papetarie.php">Adauga</a></li>
							<li><a href="/PIE/pages/papetarie/sterge-papetarie.php">Sterge</a></li>
							<li><a href="/PIE/pages/papetarie/modifica-papetarie.php">Modifica</a></li>
						</ul>
					</li>
					<li><a href="/PIE/backend/logout.php">Logout</a></li>
<?php 
	} else if ($user) {
?>

					<li><a href="/PIE/index.php">Home</a></li>
					<li><a href="/PIE/pages/carti/carti.php">Carti</a></li>
					<li><a href="/PIE/pages/jucarii/jucarii.php">Jucarii</a></li>
					<li><a href="/PIE/pages/filme/filme.php">Filme</a></li>
					<li><a href="/PIE/pages/muzica/muzica.php">Muzica</a></li>
					<li><a href="/PIE/pages/papetarie/papetarie.php">Papetarie</a></li>
					<li><a href="/PIE/pages/cart.php">Cos</a></li>
					<li><a href="/PIE/backend/logout.php">Logout</a></li>

<?php 
	} else {
?>

					<li><a href="/PIE/index.php">Home</a></li>
					<li><a href="/PIE/pages/carti/carti.php">Carti</a></li>
					<li><a href="/PIE/pages/jucarii/jucarii.php">Jucarii</a></li>
					<li><a href="/PIE/pages/filme/filme.php">Filme</a></li>
					<li><a href="/PIE/pages/muzica/muzica.php">Muzica</a></li>
					<li><a href="/PIE/pages/papetarie/papetarie.php">Papetarie</a></li>
					<li><a href="/PIE/pages/cart.php">Cos</a></li>
					<li><a href="/PIE/pages/login.php">Login</a></li>
					<li><a href="/PIE/pages/register.php">Sign up</a></li>
			

<?php
	}
?>

		</ul>
	</div>
</nav>