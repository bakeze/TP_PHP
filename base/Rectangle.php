<?php
$longueur_rectangle = 5;
$largeur_rectangle = 4;
$perimettre_du_rectangle = ($longueur_rectangle+$largeur_rectangle) * 2 ;
$demi_perimetre_du_rectangle =  $perimettre_du_rectangle / 2 ;
$longueur_diagonnale_rectangle =($longueur_rectangle+$largeur_rectangle) * sqrt(2);

echo "<big>LES CALCUL DANS UN RECTANGLE <big/> <br/>";
echo "la Longueur du rectangle  est : $longueur_rectangle <br/>";
echo "la Largeur  du rectangle  est : $largeur_rectangle <br/>";
echo "le perimetre du rectangle  est : $demi_perimetre_du_rectangle  <br/>";
echo "le demi perimetre du rectangle  est : $demi_perimetre <br/>";
echo "une longueur_diagonnale du rectangle  est : $longueur_diagonnale_rectangle <br/>";

?>