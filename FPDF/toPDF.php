<?php
$link = mysqli_connect('localhost','dev','sio','clinique');
// Si base de données en UTF-8, il faudra utiliser la fonction utf8_decode() pour tous les champs de texte à afficher

// extraction des données à afficher dans le sous-titre (nom du voyageur et dates de son voyage)
$requete = "SELECT * FROM voyageur WHERE id_voyageur='1'";
$result = mysqli_query($link, $requete);
// tableau des résultats de la ligne > $data_voyageur['nom_champ']
$data_voyageur = mysqli_fetch_array($result);
mysqli_free_result($result);

// Appel de la librairie FPDF
require("fpdf/fpdf.php");
?>