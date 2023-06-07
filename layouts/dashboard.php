<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>E-Commerce | Project5</title>

	<link rel="shortcut icon" href="<?php echo AST; ?>/img/sekolahan.jpg" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo AST; ?>/css/style.css">
</head>

<body>

	<aside>

		<header>
			<img src="<?php echo AST; ?>/img/sekolahan.jpg" class="brand">
			<div class="user">SAFNI DELIANI</div>
		</header>

		<nav>
			<ul>
				<li>
					<a href="<?php echo URL; ?>/dashboard">
						<img class="icon" src="<?php echo AST; ?>/img/icon home.png" alt=""> Home
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/kelas">
						<img class="icon" src="<?php echo AST; ?>/img/icon kelas.png" alt=""> Kelas
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/wali">
						<img class="icon" src="<?php echo AST; ?>/img/icon wali.png" alt=""> Wali
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/siswa">
						<img class="icon" src="<?php echo AST; ?>/img/icon siswa.png" alt=""> Siswa
					</a>
				</li>
			</ul>
		</nav>

	</aside>

	<main>
		<article>
			<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
		</article>

		<footer>
			Copyright &copy; 2023. Designed by SAFNI DELIANI
		</footer>
	</main>

</body>

</html>