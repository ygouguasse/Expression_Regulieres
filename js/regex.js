window.addEventListener('load', Initialiser);

function Initialiser() {
	document.getElementById('inputLongueur')
		.addEventListener('input', ValiderInputLongueur);
	document.getElementById('inputMinuscules')
		.addEventListener('input', ValiderInputMinuscules);
	document.getElementById('inputMajuscules')
		.addEventListener('input', ValiderInputMajuscules);
	document.getElementById('inputChiffres')
		.addEventListener('input', ValiderInputChiffres);
	document.getElementById('inputSpeciaux')
		.addEventListener('input', ValiderInputSpeciaux);
	document.getElementById('inputMotDePasse')
		.addEventListener('input', ValiderInputMotDePasse);
}

const regexes = {
	"longueur": /^.{12,20}$/,
	"minuscules": /^.*([\p{Ll}\p{M}].*){2}$/u,
	"majuscules": /^.*([\p{Lu}\p{M}].*){2}$/u,
	"chiffres": /^.*(\d.*){2}$/,
	"speciaux": /^.*([@$!%*#?&].*){2}$/,
};

function ValiderInputLongueur(event) {
	const valeurAValider = event.target.value;

	if (valeurAValider.match(regexes['longueur']) !== null) {
		event.target.setCustomValidity("");
	} else {
		event.target.setCustomValidity("Invalide");
	}
}

function ValiderInputMinuscules(event) {
	const valeurAValider = event.target.value;

	if (valeurAValider.match(regexes['minuscules']) !== null) {
		event.target.setCustomValidity("");
	} else {
		event.target.setCustomValidity("Invalide");
	}
}

function ValiderInputMajuscules(event) {
	const valeurAValider = event.target.value;

	if (valeurAValider.match(regexes['majuscules']) !== null) {
		event.target.setCustomValidity("");
	} else {
		event.target.setCustomValidity("Invalide");
	}
}

function ValiderInputChiffres(event) {
	const valeurAValider = event.target.value;

	if (valeurAValider.match(regexes['chiffres']) !== null) {
		event.target.setCustomValidity("");
	} else {
		event.target.setCustomValidity("Invalide");
	}
}

function ValiderInputSpeciaux(event) {
	const valeurAValider = event.target.value;

	if (valeurAValider.match(regexes['speciaux']) !== null) {
		event.target.setCustomValidity("");
	} else {
		event.target.setCustomValidity("Invalide");
	}
}

function ValiderInputMotDePasse(event) {
	const valeurAValider = event.target.value;
	event.target.setCustomValidity("");

	for (const key in regexes) {
		if (valeurAValider.match(regexes[key]) === null) {
			event.target.setCustomValidity("Invalide");
			return;
		}
	}
}