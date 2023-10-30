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
}

function ValiderInputMinuscules() {
	// Au moins 2 lettres minucules
}

function ValiderInputMajuscules() {
	// Au moins 2 lettres majuscules
}

function ValiderInputChiffres() {
	// Au moins 2 chiffres
}

function ValiderInputSpeciaux() {
	// Au moins 2 caractères spéciaux parmi : @, $, !, %, *, #, ? et &
}

function ValiderInputMotDePasse() {
	// Entre 12 et 20 caractères.
	// Au moins 2 lettres minucules.
	// Au moins 2 lettres majuscules.
	// Au moins 2 chiffres.
	// Au moins 2 caractères spéciaux parmi : @, $, !, %, *, #, ? et &.

}