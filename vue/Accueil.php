<?php $titre = 'Accueil'; ?>

<?php ob_start(); ?>

<h1>Regex</h1>

<?php $contenu = ob_get_clean(); ?>

<?php require 'vue/Gabarit.php'; ?>