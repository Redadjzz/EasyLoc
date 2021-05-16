let myForm = document.getElementById('myForm');

myForm.addEventListener('submit', function(e) {

	var inputName = document.getElementById("Nom")
	var inputPrenom = document.getElementById("Prenom")
	var inputEmail = document.getElementById("Email")
	var inputPseudo =document.getElementById("Pseudo")
	var inputPassword = document.getElementById("Password")
	var inputVerifPassword = document.getElementById("VerifPassword")

	//taille max des champs
	const MaxLenName = 12
	const MaxLenEntreprise = 15
	const MinLenVille = 30
	const MaxLenEmail = 50

	//taille min des champs

	const MinLenName = 2
	const MinLenPrenom = MinLenName
	const MinLenEntreprise = 2
	const MinLenPseudo = 2
	const MinLenPassword = 6

	const nameRegex = /^[a-zA-Z-\s]+$/
	const carSpec = /[^a-zA-Z0-9]/
	const number = /[0-9]/
	const letter = /[a-z]/i

	//verif nom 

	if(nameRegex.test(inputName.value) == false){

		let error = document.getElementById('error');
		error.innerHTML="caractére non valide "
		error.style.color='red'
		e.preventDefault()

	}
	else if(inputName.value.length < MinLenName || inputName.value.length > MaxLenName ){

		let error = document.getElementById('error');
		error.innerHTML="Il faut 2 caractéres min et 12 max"
		error.style.color='red'
		e.preventDefault()

	}

	//verif Prenom

	if(nameRegex.test(inputPrenom.value) == false){

		let errorPrenom = document.getElementById('errorPrenom');
		errorPrenom.innerHTML="caractére non valide "
		errorPrenom.style.color='red'
		e.preventDefault()

	}
	else if(inputPrenom.value.length < MinLenName || inputPrenom.value.length > MaxLenName ){

		let errorPrenom = document.getElementById('errorPrenom');
		errorPrenom.innerHTML="Il faut 2 caractéres min et 12 max"
		errorPrenom.style.color='red'
		e.preventDefault()

	}


	//verif pseudo
	if(inputPseudo.value.length < MinLenName || inputPseudo.value.length > MaxLenEmail ){

		let errorPseudo = document.getElementById('errorPseudo');
		errorPseudo.innerHTML="Il faut 2 caractéres min et 30 max"
		errorPseudo.style.color='red'
		e.preventDefault()
	}

	if(nameRegex.test(inputPseudo.value) == false){

		let errorPseudo = document.getElementById('errorPseudo');
		errorPseudo.innerHTML="caractére non valide "
		errorPseudo.style.color='red'
		e.preventDefault()
	}

	//verifPassword

	if (inputPassword.value.length < MinLenPassword){
		let erroPass = document.getElementById('erroPass');
		erroPass.innerHTML="Il faut 6 caractéres min "
		erroPass.style.color='red'
		e.preventDefault()
	}

	if (inputPassword.value != inputVerifPassword.value) {
		let erroPassVerif = document.getElementById('erroPassVerif');
		erroPassVerif.innerHTML="les mots de passe ne correspondent pas  "
		erroPassVerif.style.color='red'
		e.preventDefault()

	}


	

});

