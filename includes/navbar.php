<?php
	require 'check_user.php';

	$user = checkUser();

	if ($user) { 
?>
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">
				<div class="navbar-header">
					<div class="navbar-brand">
						<a href="index.php">
							<img class="logo" src="img/logo.svg" alt="logo">
							<img class="logo-alt" src="img/logo.svg" alt="logo">
						</a>
					</div>
					<div class="nav-collapse">
						<span></span>
					</div>
				</div>
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="index.php">Home</a></li>
					<li class="has-dropdown"><a href="carti.php">Carti</a>
						<ul class="dropdown">
							<li><a href="adauga-carte.html">Adauga o carte</a></li>
							<li><a href="sterge-carte.html">Sterge o carte</a></li>
							<li><a href="modifica-carte.html">Modifica o carte</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="jucarii.php">Jucarii</a>
						<ul class="dropdown">
							<li><a href="adauga-jucarie.html">Adauga o jucarie</a></li>
							<li><a href="sterge-jucarie.html">Sterge o jucarie</a></li>
							<li><a href="modifica-jucarie.html">Modifica o jucarie</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="filme.php">Filme</a>
						<ul class="dropdown">
							<li><a href="adauga-film.html">Adauga un film</a></li>
							<li><a href="sterge-film.html">Sterge un film</a></li>
							<li><a href="modifica-film.html">Modifica un film</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="muzica.php">Muzica</a>
						<ul class="dropdown">
							<li><a href="adauga-muzica.html">Adauga</a></li>
							<li><a href="sterge-muzica.html">Sterge</a></li>
							<li><a href="modifica-muzica.html">Modifica</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="papetarie.php">Papetarie</a>
						<ul class="dropdown">
							<li><a href="adauga-papetarie.html">Adauga</a></li>
							<li><a href="sterge-papetarie.html">Sterge</a></li>
							<li><a href="modifica-papetarie.html">Modifica</a></li>
						</ul>
					</li>
					<li><a href="includes/logout.php">Logout</a></li>
				</ul>
      		</div>
    	</nav>

<?php 
	} else {
?>

	<nav id="nav" class="navbar nav-transparent">
		<div class="container">
			<div class="navbar-header">
				<div class="navbar-brand">
					<a href="index.php">
						<img class="logo" src="img/logo.svg" alt="logo">
						<img class="logo-alt" src="img/logo.svg" alt="logo">
					</a>
				</div>
				<div class="nav-collapse">
					<span></span>
				</div>
			</div>
        	<ul class="main-nav nav navbar-nav navbar-right">
				<li><a href="#home">Home</a></li>
				<li><a href="carti.php">Carti</a>	</li>
				<li><a href="jucarii.php">Jucarii</a></li>
				<li><a href="filme.php">Filme</a></li>
				<li><a href="muzica.php">Muzica</a>	</li>
				<li><a href="papetarie.php">Papetarie</a></li>
				<li><a href="login.php">Login as Admin</a></li>
				<li><a href="loginclient.php">Login</a></li>
				<li><a href="signup.php">Sign up</a></li>
			</ul>
      	</div>
    </nav>

<?php
	}
?>