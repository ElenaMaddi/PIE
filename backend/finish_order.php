<?php
	function checkValue($value, $cart) {
		return isset($cart[$value]) ? $cart[$value] : NULL; 
	}

	require $_SERVER['DOCUMENT_ROOT'] . '/PIE/includes/check_user.php';
	$user = checkUser();

	if ($user and $user != 'admin') {
		if ($_SERVER['HTTP_REFERER'] == 'http://'.$_SERVER['HTTP_HOST'].'/PIE/pages/finalizare-comanda.php' and isset($_SESSION['cart']) and !empty($_SESSION['cart'])) {
			if (isset($_POST['nume']) and !empty($_POST['nume']) and isset($_POST['judet']) and !empty($_POST['judet']) and isset($_POST['localitate']) and !empty($_POST['localitate']) and isset($_POST['adresa']) and !empty($_POST['adresa'])) {

				$cart = $_SESSION['cart'];
				$nume = $_POST['nume'];
				$judet = $_POST['judet'];
				$localitate = $_POST['localitate'];
				$adresa = $_POST['adresa'];
				
				require $_SERVER['DOCUMENT_ROOT'] . '/PIE/includes/db_connect.php';

				try {
				    $sqls = [];

				    foreach ($cart as $category => &$ids) {
						$sqls[$category] = 'SELECT * FROM '.$category.' WHERE id'.$category.' IN ('.str_pad('',count($ids)*2-1,'?,').')';

						$stmt = $db->prepare($sqls[$category]);
						$stmt->execute($ids);
						$result = $stmt->fetchAll();

						foreach ($result as $key => $row) {
							$ids[$key] .= '-'.$row['pret'];
						}

						$ids = implode(",", $ids);
					}

					$carti = checkValue('carte', $cart);
					$filme = checkValue('film', $cart);
					$jucarii = checkValue('jucarie', $cart);
					$muzica = checkValue('muzica', $cart);
					$papetarie = checkValue('papetarie', $cart);

					$sql = 'INSERT INTO comenzi (user_id, carte, film, muzica, jucarie, papetarie, nume, judet, localitate, adresa) VALUES (:user_id , :carte, :film, :muzica, :jucarie, :papetarie, :nume, :judet, :localitate, :adresa)';
					$stmt = $db->prepare($sql);
					$insert_ok = $stmt->execute(['user_id' => $_SESSION['user_id'], 'carte' => $carti, 'film' => $filme, 'jucarie' => $jucarii, 'muzica' => $muzica, 'papetarie' => $papetarie, 'nume' => $nume, 'judet' => $judet, 'localitate' => $localitate, 'adresa' => $adresa]);

					if ($insert_ok) {
						echo 'Comanda a fost plasata.';
					}
				} catch(PDOException $error) {
					echo $error->getMessage();
				}
			} else {
				echo 'Form validation error.';
			}
		} else {
			header("Location: /PIE/index.php");
		}
	} else {
		header("Location: /PIE/pages/login.php?next=cart");
	}

?>