<?php
include "header.php";

echo '<div class="mamap">';
echo '<a href="index.php" alt="retour"><div class="bp1"></div></a>';
echo $chgt.'<a href="chgt/Calendrier.pdf" target="_blank"><img src="css/calendrier.jpg" title="'.$calendrier.'"></a> ';
echo '<a href="chgt/Affiche.pdf" target="_blank"><img src="css/Affiche.jpg" title="'.$affiche.'"></a><br />';
?>
<iframe width="100%" height="700px" frameBorder="0" src="http://umap.openstreetmap.fr/fr/map/essai-integration-openstrretmap-dans-un-site_55005?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&datalayersControl=true&onLoadPanel=undefined&captionBar=false&datalayers=123114#12/48.5158/1.0379"></iframe><p><a href="http://umap.openstreetmap.fr/fr/map/essai-integration-openstrretmap-dans-un-site_55005">View full screen</a></p>
</div>

</body>
</html>
