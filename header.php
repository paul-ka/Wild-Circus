<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="robots" content="index,follow" />
		<link rel="stylesheet" type="text/css" href="css/styles.css" />
	</head>

	<body>
		<header>
			<img id="bande" src="css/banderole.svg">
			<h1>WILD CIRCUS</h1>
			<?php
			//initialisation
			//include_once('init.php');
			//test initialisation $_SESSION
			if(!isset($_SESSION['lg'])){
				$_SESSION['lg']='gb';
			}
			//test ordre changement
			if(isset($_GET['chg'])){
				//test changement gb
				if($_GET['chg']=="gb"){
					$_SESSION['lg']='gb';
				}
				//test changement fr
				if($_GET['chg']=="fr"){
					$_SESSION['lg']='fr';
				}
			}
			//affichage du bon drapeau
			if($_SESSION['lg']=='gb'){
				echo '<a href="index.php?chg=fr"><img src="css/gb.jpg" alt="Drapeau GB" title="Cliquer ici pour passer en français"></a>';
				include('gb.php');
			} else {
				echo '<a href="index.php?chg=gb"><img src="css/fr.jpg" alt="Drapeau FR" title="Click here to switch to French"></a>';
				include('fr.php');
			}
			echo '<span class="stitre">'.$slogan.'</span>';
			?>
		</header>


