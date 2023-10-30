<?php $titre = 'JavaScript'; ?>

<?php ob_start(); ?>

<form class="was-validated">
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
		<div class="invalid-feedback">Entre 12 et 20 caractères</div>
	</div>

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
		<div class="invalid-feedback">Au moins 2 lettres minucules</div>
	</div>

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
        <div class="invalid-feedback">Au moins 2 lettres majuscules</div>
    </div>

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
        <div class="invalid-feedback">Au moins 2 chiffres</div>
    </div>

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
        <div class="invalid-feedback">Au moins 2 caractères spéciaux parmi : @, $, !, %, *, #, ? et &</div>
    </div>

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
        <div class="invalid-feedback">
            Entre 12 et 20 caractères. <br>
            Seul les lettres minuscules, les lettres majuscules, les chiffres, @, $, !, %, *, #, ? et & sont autorisés. <br>
            Au moins 2 lettres minucules. <br>
            Au moins 2 lettres majuscules. <br>
            Au moins 2 chiffres. <br>
            Au moins 2 caractères spéciaux parmi : @, $, !, %, *, #, ? et &.
        </div>
    </div>
</form>

<script src="js/regex.js"></script>

<?php $contenu = ob_get_clean(); ?>

<?php require 'vue/Gabarit.php'; ?>