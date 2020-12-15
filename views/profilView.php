<h1>Page profil</h1>

<br><br>
<div class="container">
    <div class="well col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
        <div class="row user-row">
            <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                <img class="img-circle" src="<?= $userData["avatar"] ?>" alt="User Pic">
            </div>
            <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
                <strong>
                    <td><?= $userData["prenom"] ?>
                </strong><br>
                <span class="text-muted"><?= $userData["nom"] ?></span>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 dropdown-user" data-for=".cyruxx">
                <i class="glyphicon glyphicon-chevron-down text-muted"></i>
            </div>
        </div>
        <div class="row user-infos cyruxx">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Informations personnelles</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
                                <img class="img-circle" src=<?= $userData["avatar"] ?> alt="User Pic">
                            </div>
                            <div class="col-xs-2 col-sm-2 hidden-md hidden-lg">
                                <img class="img-circle" src=<?= $userData["avatar"] ?> alt="User Pic">
                            </div>
                            <div class=" col-md-9 col-lg-9 hidden-xs hidden-sm">
                                <strong>Informations personnelles</strong><br>
                                <table class="table table-user-information">
                                    <tbody>
                                        <tr>
                                            <td>Prenom</td>
                                            <td><?= $userData["prenom"] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nom:</td>
                                            <td><?= $userData["nom"] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Pseudo:</td>
                                            <td><?= $userData["pseudo"] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><?= $userData["email"] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Role</td>
                                            <td><?= $userData["role"] ?></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a href="index.php?action=logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>