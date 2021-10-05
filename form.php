<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Your first HTML form</title>
	</head>

	<body>
		<form action="Thanks.php" method="post">
    <?php
    ?>
			<ul>
				<li>
					<label for="firstname">Prenom:</label>
					<input type="text" id="firstname" name="user_firstname" />
				</li>
        <li>
					<label for="lastname">Nom:</label>
					<input type="text" id="lastname" name="user_lastname" />
				</li>
				<li>
					<label for="mail">E-mail:</label>
					<input type="email" id="mail" name="user_mail" />
				</li>
        <li>
					<label for="phone">Téléphone:</label>
					<input type="text" id="naphoneme" name="user_phone" />
				</li>
        <p></p>
				<li>
        <label for="subject">Sujet:</label>
          <SELECT name="choix" size="1">
          <option value="requete">Requête</option>    
          <option value="demande">Demande</option> 
          <option value="info">Info</option> 
          <option value="plainte">Plainte</option> 
          <option value="autre">Autre</option> 
          </SELECT>
					<label for="msg">Message:</label>
					<textarea id="msg" name="user_message"></textarea>
				</li>
				<li class="button">
					<button type="submit">Envoyez votre message</button>
				</li>
			</ul>
		</form>

    <style>
      form {
  /* Uniquement centrer le formulaire sur la page */
  margin: 0 auto;
  width: 400px;
  /* Encadré pour voir les limites du formulaire */
  padding: 1em;
  border: 1px solid #CCC;
  border-radius: 1em;
}

form div + div {
  margin-top: 1em;
}

label {
  /* Pour être sûrs que toutes les étiquettes ont même taille et sont correctement alignées */
  display: inline-block;
  width: 90px;
  text-align: right;
}

input, textarea {
  /* Pour s'assurer que tous les champs texte ont la même police.
     Par défaut, les textarea ont une police monospace */
  font: 1em sans-serif;

  /* Pour que tous les champs texte aient la même dimension */
  width: 300px;
  box-sizing: border-box;

  /* Pour harmoniser le look & feel des bordures des champs texte */
  border: 1px solid #999;
}

input:focus, textarea:focus {
  /* Pour souligner légèrement les éléments actifs */
  border-color: #000;
}

textarea {
  /* Pour aligner les champs texte multi‑ligne avec leur étiquette */
  vertical-align: top;

  /* Pour donner assez de place pour écrire du texte */
  height: 5em;
}

.button {
  /* Pour placer le bouton à la même position que les champs texte */
  padding-left: 90px; /* même taille que les étiquettes */
}

button {
  /* Cette marge supplémentaire représente grosso modo le même espace que celui
     entre les étiquettes et les champs texte */
  margin-left: .5em;
}
    </style>
	</body>
</html>