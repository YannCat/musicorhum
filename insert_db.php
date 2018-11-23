<?php
include('pdo.php');

if(!empty($_POST['tarif'])) $prix = $_POST['tarif']; else $prix = NULL;
if(!empty($_POST['liens'])) $link = $_POST['liens']; else $link = NULL;
if(!empty($_POST['puissance'])) $power = $_POST['puissance']; else $power = NULL;
if(!empty($_POST['heure']) || !empty($_POST['minute'])) $autonomie = $_POST['heure']*3600 + $_POST['minute']*60; else $autonomie = NULL;
if(!empty($_POST['poid'])) $weight = $_POST['poid']; else $weight = NULL;
if(!empty($_POST['couleur'])) $color = $_POST['couleur']; else $color = NULL;
if(!empty($_POST['forme'])) $form = $_POST['forme']; else $form = NULL;
if(isset($_POST['jack'])) $jack = "Y"; else $jack = "N";
if(isset($_POST['wifi'])) $wifi = "Y"; else $wifi = "N";
if(isset($_POST['bluetooth'])) $bluetooth = "Y"; else $bluetooth = "N";
if(isset($_POST['eclairage'])) $eclairage = "Y"; else $eclairage = "N";


if(!empty($_POST['hauteur']) && !empty($_POST['longueur']) && !empty($_POST['largeur'])) 
	{
	$heigh = $_POST['hauteur']; 
	$length = $_POST['longueur'];
	$width = $_POST['largeur'];
	$dimension = $heigh . "*" . $length . "*" . $width;
	$insert_dimension = "INSERT INTO `Musicorhum`.`dimension` (`hauteur`, `longueur`, `largeur`) VALUES ('" . $heigh . "', '" . $length . "', '" . $width . "');";
	$req1 = $pdo->query($insert_dimension);
	$id_dimension = $pdo->lastInsertId();
}
else {
	$heigh = NULL;
	$length = NULL;
	$width = NULL;
	$dimension = "Non Renseigné";
}

if(isset($autonomie) || isset($jack) || isset($wifi) || isset($bluetooth) || !empty($_POST['puissance']))
{
	$insert_technique = "INSERT INTO `Musicorhum`.`technique` (`puissance`, `jack`, `autonomie`, `wifi`, `bluetooth`) VALUES ('" . $power . "', '" . $jack . "', '" . $autonomie . "', '" . $wifi . "', '" . $bluetooth . "');";
	$req2 = $pdo->query($insert_technique);
	$id_technique = $pdo->lastInsertId();
}

if(!empty($_POST['poid']) || isset($id_dimension) || !empty($_POST['couleur']) || !empty($_POST['forme']) || isset($eclairage))
	{
		$insert_esthetique = "INSERT INTO `Musicorhum`.`esthetique` (`id_dimension`, `poids`, `couleur`, `forme`, `eclairage`) VALUES ('" . $id_dimension . "', '" . $weight . "', '" . $color . "', '" . $form . "', '" . $eclairage . "');";
		$req3 = $pdo->query($insert_esthetique);
		$id_esthetique = $pdo->lastInsertId();
}

$insert_enceinte = "INSERT INTO `Musicorhum`.`enceinte` (`nom`, `marque`, `tarif`, `liens_achat`, `id_technique`, `id_esthetique`, `id_constructeur`) VALUES ('" . $_POST['nom'] . "', '" . $_POST['marque'] . "', '" . $prix . "', '" . $link . "', '" . $id_technique . "', '" . $id_esthetique . "', NULL);";
$req4 = $pdo->query($insert_enceinte);


?>
