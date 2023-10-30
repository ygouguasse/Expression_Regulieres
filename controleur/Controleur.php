<?php

function AfficherPageDefaut()
{
	AfficherPageAccueil();
}

function AfficherPageAccueil()
{
	require 'vue/Accueil.php';
}

function AfficherPageHTML()
{
	require 'vue/HTML.php';
}

function AfficherPageJavaScript()
{
	require 'vue/JavaScript.php';
}

function AfficherPagePHP()
{
	require 'vue/PHP.php';
}

function AfficherPageAjaxUpload()
{
	require 'vue/AjaxUpload.php';
}

function ValiderInputLongueur() {
	// Entre 12 et 20 caractères
	if (empty($_POST['inputLongueur'])) {
		header('Location: index.php?action=PHP&erreur=longueur');
		return;
	}

	$regex = '/^.{12,20}$/';
	if (preg_match($regex, $_POST['inputLongueur'])) {
		header('Location: index.php?action=PHP');
		return;
	}
	
	header('Location: index.php?action=PHP&erreur=longueur');
}

function ValiderInputMinuscules() {
	// Au moins 2 lettres minucules
	if (empty($_POST['inputMinuscules'])) {
		header('Location: index.php?action=PHP&erreur=minuscules');
		return;
	}

	$regex = '/^.*([\p{Ll}\p{M}].*){2}$/u';
	if (preg_match($regex, $_POST['inputMinuscules'])) {
		header('Location: index.php?action=PHP');
		return;
	}
	
	header('Location: index.php?action=PHP&erreur=minuscules');
}

function ValiderInputMajuscules() {
	// Au moins 2 lettres majuscules
	if (empty($_POST['inputMajuscules'])) {
		header('Location: index.php?action=PHP&erreur=majuscules');
		return;
	}

	$regex = '/^.*([\p{Lu}\p{M}].*){2}$/u';
	if (preg_match($regex, $_POST['inputMajuscules'])) {
		header('Location: index.php?action=PHP');
		return;
	}
	
	header('Location: index.php?action=PHP&erreur=majuscules');
}

function ValiderInputChiffres() {
	// Au moins 2 chiffres
	if (empty($_POST['inputChiffres'])) {
		header('Location: index.php?action=PHP&erreur=chiffres');
		return;
	}

	$regex = '/^.*(\d.*){2}$/';
	if (preg_match($regex, $_POST['inputChiffres'])) {
		header('Location: index.php?action=PHP');
		return;
	}
	
	header('Location: index.php?action=PHP&erreur=chiffres');
}

function ValiderInputSpeciaux() {
	// Au moins 2 caractères spéciaux parmi : @, $, !, %, *, #, ? et &
	if (empty($_POST['inputSpeciaux'])) {
		header('Location: index.php?action=PHP&erreur=speciaux');
		return;
	}

	$regex = '/^.*([@$!%*#?&].*){2}$/';
	if (preg_match($regex, $_POST['inputSpeciaux'])) {
		header('Location: index.php?action=PHP');
		return;
	}
	
	header('Location: index.php?action=PHP&erreur=speciaux');
}

function ValiderInputMotDePasse() {
	// Entre 12 et 20 caractères.
	// Au moins 2 lettres minucules.
	// Au moins 2 lettres majuscules.
	// Au moins 2 chiffres.
	// Au moins 2 caractères spéciaux parmi : @, $, !, %, *, #, ? et &.
	if (empty($_POST['inputMotDePasse'])) {
		header('Location: index.php?action=PHP&erreur=motDePasse');
		return;
	}

	$regex = '/^(?=.*([\p{Ll}\p{M}].*){2})(?=.*([\p{Lu}\p{M}].*){2})(?=.*(\d.*){2})(?=.*([@$!%*#?&].*){2})[\p{L}\p{M}\d@$!%*#?&]{12,20}$/u';
	if (preg_match($regex, $_POST['inputMotDePasse'])) {
		header('Location: index.php?action=PHP');
		return;
	}
	
	header('Location: index.php?action=PHP&erreur=motDePasse');
}