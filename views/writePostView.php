<h1>page pour ecire les postes</h1>

<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Titre</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="titre_post" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">selections catégories</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>HTML</option>
      <option>CSS</option>
      <option>JS</option>
      <option>PHP</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Votre texte</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="titre_post" required></textarea>
  </div>
  <form action="#" method="POST">
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>
  </form>
</form>