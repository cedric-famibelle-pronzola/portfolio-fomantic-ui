	<div class="ui inverted segment container">
		<form class="ui form inverted" method="POST" action="./contact.php">
			<div class="field required">
				<label>Prénom</label>
				<input type="text" name="firstName" placeholder="Prénom" pattern="^[a-zA-Z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._\s-]{2,30}$">
			</div>
			<div class="field required">
				<label>Nom</label>
				<input type="text" name="lastName" placeholder="Nom" pattern="^[a-zA-Z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._\s-]{2,30}$">
			</div>
			<div class="field required">
				<label>Adresse email</label>
				<input type="email" name="email" placeholder="Adresse email" pattern="[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})" maxlength="60">
			</div>
			<div class="field required">
				<label>Objet</label>
				<input type="text" name="subject" placeholder="Objet">
			</div>
			<div class="field required">
				<label>Votre message</label>
				<textarea name="message" rows="3" placeholder="Ecrivez votre message"></textarea>
			</div>

			<div style="margin-bottom: 2em" class="field required">
				<div class="ui toggle checkbox">
					<input type="checkbox" name="checkbox">
					<label> <a target="_blank" class="cgu" href="./mentions/mentions.html">J'accepte les conditions générales d'ulisation</a></label>
				</div>
			</div>
			<button class="ui submit button" type="submit" name="sendMessage">Envoyer le message</button>
			<div class="ui error message"></div>
		</form>
	</div>
