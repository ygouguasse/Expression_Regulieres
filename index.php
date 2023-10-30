<?php
require 'controleur/Controleur.php';

try {
	if (!isset($_GET['action'])) {
		return AfficherPageDefaut();
	}
	switch ($_GET['action']) {
		case 'Accueil':
			AfficherPageAccueil();
			break;
		case 'HTML':
			AfficherPageHTML();
			break;
		case 'JavaScript':
			AfficherPageJavaScript();
			break;
		case 'PHP':
			AfficherPagePHP();
			break;
		case 'ValiderInputLongueur':
			ValiderInputLongueur();
			break;
		case 'ValiderInputMinuscules':
			ValiderInputMinuscules();
			break;
		case 'ValiderInputMajuscules':
			ValiderInputMajuscules();
			break;
		case 'ValiderInputChiffres':
			ValiderInputChiffres();
			break;
		case 'ValiderInputSpeciaux':
			ValiderInputSpeciaux();
			break;
		case 'ValiderInputMotDePasse':
			ValiderInputMotDePasse();
			break;
		default:
			throw new Exception('Aucune page spécifique demandée');
	}
} catch (PDOException $e) {
	$msgErreur = $e->getMessage();
	require 'vue/Erreur.php';
} catch (Exception $ex) {
	$msgErreur = $ex->getMessage();
	require 'vue/Erreur.php';
}
