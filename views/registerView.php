<!--------------------- PAGE ENREGISTREMENT --------------------------->
<form method="post" action="#" class="dropdown-menu p-4">
    <div class="form-group">

<!----------------------- NOM ---------------------------->
        <label for="exampleDropdownFormNom">Nom</label>
        <input type="text" class="form-control" id="exampleDropdownFormName" placeholder="Nom de famille" name="nom">
    </div>

<!--------------------- PRENOM --------------------------->
    <div class="form-group">
        <label for="exampleDropdownFormPrenom">Prénom</label>
        <input type="text" class="form-control" id="exampleDropdownFormPrenom" placeholder="Prénom" name="prenom">
    </div>

<!--------------------- PSEUDO --------------------------->
    <div class="form-group">
        <label for="exampleDropdownFormPseudo">Pseudo</label>
        <input type="text" class="form-control" id="exampleDropdownFormPseudo" placeholder="Pseudo" name="pseudo">
    </div>

<!----------------------- MAIL --------------------------->
    <div class="form-group">
        <label for="exampleDropdownFormEmail">Adresse mail</label>
        <input type="email" class="form-control" id="exampleDropdownFormEmail" placeholder="email@example.com" name="email">
    </div>

<!------------------------ MDP --------------------------->
    <div class="form-group">
        <label for="exampleDropdownFormPassword">Mot de passe</label>
        <input type="password" class="form-control" id="exampleDropdownFormPassword" placeholder="Password" name="password">
    </div>

<!----------------- CONFIRMATION MDP --------------------->
<div class="form-group">
        <label for="exampleDropdownFormConfirm_Password">Confirmation mot de passe</label>
        <input type="password" class="form-control" id="exampleDropdownFormPassword" placeholder="Confirmation mot passe" name="confirm_password">
    </div>

<!----------------- AJOUTER FICHIER ---------------------->
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Avatar</span>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01">
            <label class="custom-file-label" for="inputGroupFile01"></label>
        </div>
    </div>

<!---------------- BUTTON ENREGISTRER --------------------->
    <button type="submit" class="btn btn-primary">S'enregistré</button>
</form>