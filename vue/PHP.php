<?php $titre = 'PHP'; ?>

<?php ob_start(); ?>

<?php
    function AfficherErreurInputLongueur() {
        if (empty($_GET['erreur']) || $_GET['erreur'] !== 'longueur') {
            return;
        }

        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Entre 12 et 20 caractères
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }

    function AfficherErreurInputMinuscules() {
        if (empty($_GET['erreur']) || $_GET['erreur'] !== 'minuscules') {
            return;
        }

        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Au moins 2 lettres minucules
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }
    
    function AfficherErreurInputMajuscules() {
        if (empty($_GET['erreur']) || $_GET['erreur'] !== 'majuscules') {
            return;
        }

        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Au moins 2 lettres majuscules
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }
    
    function AfficherErreurInputChiffres() {
        if (empty($_GET['erreur']) || $_GET['erreur'] !== 'chiffres') {
            return;
        }

        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Au moins 2 chiffres
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }
    
    function AfficherErreurInputSpeciaux() {
        if (empty($_GET['erreur']) || $_GET['erreur'] !== 'speciaux') {
            return;
        }

        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Au moins 2 caractères spéciaux parmi : @, $, !, %, *, #, ? et &
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }
    
    function AfficherErreurInputMotDePasse() {
        if (empty($_GET['erreur']) || $_GET['erreur'] !== 'motDePasse') {
            return;
        }

        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Entre 12 et 20 caractères. <br>
            Seul les lettres minuscules, les lettres majuscules, les chiffres, @, $, !, %, *, #, ? et & sont autorisés. <br>
            Au moins 2 lettres minucules. <br>
            Au moins 2 lettres majuscules. <br>
            Au moins 2 chiffres. <br>
            Au moins 2 caractères spéciaux parmi : @, $, !, %, *, #, ? et &.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }
?>

<form method="post" action="index.php?action=ValiderInputLongueur" class="mb-3">
    <?php AfficherErreurInputLongueur(); ?>
	<div class="form-floating mb-3">
		<input
			type="text"
			class="form-control"
			placeholder="inputLongueur"
			id="inputLongueur"
			name="inputLongueur"
			required
		>
		<label for="inputLongueur">Entre 12 et 20 caractères</label>
	</div>

    <button type="submit" class="btn btn-primary">Valider</button>
</form>

<form method="post" action="index.php?action=ValiderInputMinuscules" class="mb-3">
    <?php AfficherErreurInputMinuscules(); ?>
	<div class="form-floating mb-3">
		<input
			type="text"
			class="form-control"
			placeholder="inputMinuscules"
			id="inputMinuscules"
			name="inputMinuscules"
			required
		>
		<label for="inputMinuscules">Au moins 2 lettres minucules</label>
	</div>

    <button type="submit" class="btn btn-primary">Valider</button>
</form>

<form method="post" action="index.php?action=ValiderInputMajuscules" class="mb-3">
    <?php AfficherErreurInputMajuscules(); ?>
    <div class="form-floating mb-3">
        <input
            type="text"
            class="form-control"
            placeholder="inputMajuscules"
            id="inputMajuscules"
            name="inputMajuscules"
            required
        >
        <label for="inputMajuscules">Au moins 2 lettres majuscules</label>
    </div>

    <button type="submit" class="btn btn-primary">Valider</button>
</form>

<form method="post" action="index.php?action=ValiderInputChiffres" class="mb-3">
    <?php AfficherErreurInputChiffres(); ?>
    <div class="form-floating mb-3">
        <input
            type="text"
            class="form-control"
            placeholder="inputChiffres"
            id="inputChiffres"
            name="inputChiffres"
            required
        >
        <label for="inputChiffres">Au moins 2 chiffres</label>
    </div>

    <button type="submit" class="btn btn-primary">Valider</button>
</form>

<form method="post" action="index.php?action=ValiderInputSpeciaux" class="mb-3">
    <?php AfficherErreurInputSpeciaux(); ?>
    <div class="form-floating mb-3">
        <input
            type="text"
            class="form-control"
            placeholder="inputSpeciaux"
            id="inputSpeciaux"
            name="inputSpeciaux"
            required
        >
        <label for="inputSpeciaux">Au moins 2 caractères spéciaux parmi : @, $, !, %, *, #, ? et &</label>
    </div>

    <button type="submit" class="btn btn-primary">Valider</button>
</form>

<form method="post" action="index.php?action=ValiderInputMotDePasse" class="mb-3">
    <?php AfficherErreurInputMotDePasse(); ?>
    <div class="form-floating mb-3">
        <input
            type="text"
            class="form-control"
            placeholder="inputMotDePasse"
            id="inputMotDePasse"
            name="inputMotDePasse"
            required
        >
        <label for="inputMotDePasse">Mot de passe</label>
    </div>

    <button type="submit" class="btn btn-primary">Valider</button>
</form>

<?php $contenu = ob_get_clean(); ?>

<?php require 'vue/Gabarit.php'; ?>