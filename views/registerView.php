<h1>Page d'inscription</h1>

<?php if (isset($error)) : ?>
    <h2 style="color:red"><?= $error ?></h2>
<?php endif ?>

<form action="#" method="POST">
    <div class="form-group">
<!---------------- NOM ------------------------>
        <p>Nom : <input class="form-control" type="text" name="nom"></p>
<!---------------- PRENOM --------------------->
        <p>Prénom : <input class="form-control" type="text" name="prenom"></p>
<!---------------- PSEUDO --------------------->
        <p>Pseudo : <input class="form-control" type="text" name="pseudo"></p>
<!---------------- EMAIL ---------------------->
        <p>Email : <input class="form-control" type="email" name="email"></p>
<!---------------- MDP ------------------------>
        <p>Mot de passe : <input id="input-mdp" class="form-control" type="password" name="password"></p>
<!---------------- CONFIRM_MDP ---------------->
        <p>Confirmation du mot de passe : <input id="input-confirm-mdp" class="form-control" type="password" name="confirm_password"></p>
<!---------------- AVATAR --------------------->        
        <p>Ajouter un avatar : <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01"></label>
                               </div>
        </p>
<!---------------- BUTTON ENREGISTRER --------->
    <button type="submit" class="btn btn-primary">S'enregistré</button>
    </div>
</form>
