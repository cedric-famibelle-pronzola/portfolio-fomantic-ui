<div class="ui inverted segment container">
  <form class="ui form inverted" method="POST" action="../contact.php">
    <div class="field required">
      <label>Prénom</label>
      <input required type="text" name="firstName" placeholder="Prénom" pattern="^[a-zA-Z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._\s-]{2,30}$">
    </div>
    <div class="field required">
      <label>Nom</label>
      <input required type="text" name="lastName" placeholder="Nom" pattern="^[a-zA-Z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._\s-]{2,30}$">
    </div>
    <div class="field required">
      <label>Adresse email</label>
      <input required type="email" name="email" placeholder="Adresse email" pattern="[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})" maxlength="60">
    </div>
    <div class="field required">
      <label>Objet</label>
      <input required type="text" name="subject" placeholder="Objet">
    </div>
    <div class="field required">
      <label>Votre message</label>
      <textarea name="message" rows="3" placeholder="Ecrivez votre message"></textarea>
    </div>
    <div class="field required">
      <div class="ui toggle checkbox">
        <input type="checkbox" name="gift" required>
        <label> <a href="#">J'accepte les conditions générales d'ulisation</a> </label>
      </div>
    </div>
    <button class="ui button" type="submit" name="sendMessage">Envoyer le message</button>
  </form>
</div>