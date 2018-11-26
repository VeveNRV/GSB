<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Gestion de Frais GSB</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>

    <body>
        <section class="container formulaire">
            <h1>Application Gestion Frais</h1>
<?php
if (isset($_SESSION["newuser"]) &&  $_SESSION["newuser"]) {
    ?>
            <div class="alert alert-success" role="alert">
                Nouvel utilisateur ajouté avec succès
            </div>
<?php
}
?>
            <form action="functions/login.php" method="POST">
            <div class="form-group">
                <label>Rôle</label>
                <select name="role" class="form-control">
                    <option selected>Rôle...</option>
                    <option>Utilisateur</option>
                    <option>Comptable</option>
                    <option>Administrateur</option>
                </select>
            </div>
                <div class="form-group">
                    <label for="labelForm">Nom</label>
                    <input type="text"  name="nom" class="form-control" placeholder="Entrez votre nom...">
                </div>
                <div class="form-group">
                    <label for="labelForm">Prénom</label>
                    <input type="text" name="prenom" class="form-control" placeholder="Entrez votre prénom...">
                </div>
                <div class="form-group">
                    <label for="labelForm">E-mail</label>
                    <input type="text" name="email" class="form-control" placeholder="Entrez votre e-mail...">
                </div>
                <div class="form-group">
                    <label for="labelForm">Mot de passe</label>
                    <input type="password" name="mdp" class="form-control" placeholder="Entrez votre mot de passe...">
                </div>
                <input class="btn btn-primary" type="submit" value="Valider" />
            </form>
        </section>
    </body>
</html> 