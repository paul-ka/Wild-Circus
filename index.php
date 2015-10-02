<?php
include "header.php";
echo "<section>";
$img="css/jongleur.jpg";
$lien="jongleur.php";
carte($img, $index_t1, $index_c1, $lien);
$img="css/otarie.jpg";
$lien="otarie.php";
carte($img, $index_t2, $index_c2, $lien);
$img="css/clown.jpg";
$lien="clown.php";
carte($img, $index_t3, $index_c3, $lien);
$img="css/lion.jpg";
$lien="lion.php";
carte($img, $index_t4, $index_c4, $lien);
$img="css/carte.jpg";
$lien="Carte.php";
carte($img, $index_t5, $index_c5, $lien);
echo "</section>";


function carte($img, $titre, $text, $url){
	echo '<article class="lacarte">';
	echo '<div class="lacarte__img">';
	echo '<img src="'.$img.'">';
	echo '</div>';
	echo '<div class="lacarte__ecrit">';
	echo '<a href="'.$url.'">';
	echo '<div class="lacarte__ecrit__titre">';
	echo $titre;
	echo '</div>';
	echo '<div class="lacarte__ecrit__text">';
	echo $text;
	echo '</div>';
	echo '</a>';
	echo '</div>';
	
	
	echo '</article>';
	
}
?>