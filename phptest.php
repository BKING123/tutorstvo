<!DOCTYPE html>
<html lang="sl">
	<head>
		<title>Tutorstvo GL</title>
		<meta charset="UTF-8">
		<meta name="description" content="Uradna stran Tutorstva GL">
		<meta name="keywords" content="Ledina, Tutorji, Tutorcki, Tutorstvo, GL">
		<meta name="author" content="plojyon, Yon Ploj, Domen Vogrin, BKING"> <!-- ne pozabite se dodati kot avtor! -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/png" href="media/favicon.png">
		<link rel="stylesheet" type="text/css" href="index.css"/>



		<!-- font z ikonami -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

		<!-- google fonti -->
		<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Helvetica+Neue%7COpen+Sans:800" crossorigin="anonymous">-->


		<!--
		Primeri ikon:
			Hisica (home) 				<i class="fa fa-home"></i>
			Grid (podoben logotipu GL) 	<i class="fas fa-th"></i>
			Casopis (novice) 			<i class="far fa-newspaper"></i>
			Skupnost (kdo smo)			<i class="fas fa-users"></i>
			Lupa (isci tutorja)			<i class="fas fa-search"></i>
			Cloveck+ (postani tutor)	<i class="fas fa-user-plus"></i>
			Graduation cap (tutorstvo) 	<i class="fas fa-graduation-cap"></i>
		-->

		<script>
			console.log("----------------------------------------------------------------------------------------------------------------------------");
			console.log("Hey!\nImas izkusnje z razvijanjem spletnih strani?\n\nPridruzi se tutorski ekipi in pomagaj pri razvoju prav te!");
			console.log("Projekt je open-source, najdes ga na githubu: https://github.com/plojyon/tutorstvo \nce pa zelis pomagati, se oglasi v kabinetu pri Anji Vidmar in z veseljem te bomo sprejeli!");
			console.log("Ne pozabi, da s sodelovanjem pri razvoju dobis tudi ostale tutorske privilegije, npr. koncni izlet in tocke za naj razred!");
			console.log("Pricakujemo te!");
			console.log("	-Ekipa tutorjev Ledine");
			console.log("----------------------------------------------------------------------------------------------------------------------------");
		</script>
	</head>
	<!--
	Hey!
	Imas izkusnje z razvijanjem spletnih strani?

	Pridruzi se tutorski ekipi in pomagaj pri razvoju prav te!

	Projekt je open-source, najdes ga na githubu: https://github.com/plojyon/tutorstvo.
	Ce pa zelis pomagati, se oglasi v kabinetu pri Anji Vidmar in z veseljem te bomo sprejeli!

	Ne pozabi, da s sodelovanjem pri razvoju dobis tudi ostale tutorske privilegije, npr. koncni izlet in tocke za naj razred!

	Pricakujemo te!
		-Ekipa tutorjev Ledine
	-->
	<body>
		<header>
			<a href="http://www.ledina.si"><img id="logo" class="desktop" src="media/ledina.jpg" alt="GL" height="150"></a>
			<div class="spacer"></div>
			<nav>
				<div class="spacer"></div>
				<ul>
					<li><a class="selected" href="index.php"><i class="fa fa-home"></i>Domov</a></li>
					<!--<li><a href="https://www.ledina.si/" target="_blank"><i class="fas fa-th"></i>GLedina</a></li>-->
					<!--<li><a href="#novice"><i class="far fa-newspaper"></i>Novice</a></li>-->
					<li><a href="#faq"><i class="fas fa-users"></i>Kdo&nbsp;smo</a></li>
					<li class="desktop"><a href="prijava.php"><i class="fas fa-search"></i>Poišči&nbsp;tutorja</a></li>
					<!--<li><a href="prijava/tutor/index.php"><i class="fas fa-user-plus"></i>Postani&nbsp;tutor</a></li>-->
					<li><a href="eTutor/login.php"><i class="fas fa-sign-in-alt"></i>Prijava&nbsp;v&nbsp;eTutor</a></li>
				</ul>
				<div class="spacer"></div>
			</nav>
		</header>
		<section id="quick">
			<h1 id="title"><i class="fas fa-graduation-cap"></i>Tutorstvo&nbsp;GL</h1>
			<p id="description">Prva pomoč proti slabim ocenam!<br>Zastonj inštrukcije od sodijakov, sovrstnikov, ki najbolje poznajo prav tvoje profesorje.<br>Izboljšave vidne že po enem samem srečanju!</p>
			<a id="signup" href="prijava.php">pOiščI TUtoRjA</a>
		</section>
		<main>
			<?php
				echo "php test..";
				$seed = rand();

				$data = "Begin data for " . $seed . ":\n";
				$data = $data . "\nName: " . $_GET["name"];
				$data = $data . "\nTime: " . $_GET["time"];
				$data = $data . "\nUsername: " . $_GET["uname"];
				$data = $data . "\nFullname: " . $_GET["fullname"];
				$data = $data . "\nEmail: " . $_GET["email"];
				$data = $data . "\nMobile: " . $_GET["mobile"];
				$data = $data . "\nPhone: " . $_GET["phone"];
				$data = $data . "\nLang: " . $_GET["lang"];
				$data = $data . "\nAddress: " . $_GET["addr"];
				$data = $data . "\nICQ" . $_GET["icq"];

				file_put_contents("data_".$seed.".txt", $data);

				echo "File reads:<br>";
				echo file_get_contents("data_".$seed.".txt");
				echo "<br><br><br>";
				echo "Actual data:<br>";
				echo $data;

				echo "<br><br><br><br><br>"

				phpinfo();
			?>
		</main>
	</body>
</html>
