<?php
session_start();
include ('connexionBDD.php');

$query = $bdd ->query('select * from role');
$roles = $query -> fetchAll();
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
            <h1>Inscription utilisateur</h1>
<?php
if (isset($_SESSION["newuser"]) &&  $_SESSION["newuser"]) {
?>
            <div class="alert alert-success" role="alert">
                Nouvel utilisateur ajouté avec succès !
            </div>
<?php
}
?>
            <form action="functions/login.php" method="POST">
                <div class="form-group">
                    <label>Rôle</label>
                    <select name="role" class="form-control">
                        <option selected>Rôle...</option>
                        <?php  foreach ($roles as $role) { ?>
                            <option value="<?php echo $role['id']; ?>"><?php echo $role['libelle']; ?></option>
                        <?php } ?>
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
                    <label for="labelForm">Date de naissance</label>
                    <input type="date" name="date_naissance" class="form-control" placeholder="jj/mm/aaaa">
                </div>

                <div class="form-group">
                    <label for="labelForm">E-mail</label>
                    <input type="text" name="email" class="form-control" placeholder="Entrez votre E-mail...">

                <div class="form-group">
                    <label for="labelForm">Mot de passe</label>
                    <input type="password" name="mdp" class="form-control" placeholder="Entrez votre mot de passe...">
                </div>

                <div class="form-group">
                    <label for="labelForm">Ville</label>
                    <input type="text" name="ville" class="form-control" placeholder="Entrez ville...">
                </div>

                <div class="form-group">
                    <label for="labelForm">Adresse</label>
                    <input type="text" name="adresse" class="form-control" placeholder="Entrez adresse...">
                </div>

                <div class="form-group">
                    <label for="labelForm">Code postal</label>
                    <input type="text" name="code_postal" class="form-control" placeholder="Entrez code postal...">
                </div>

                <div class="form-group">
                    <label for="labelForm">Pseudo</label>
                    <input type="text" name="pseudo" class="form-control" placeholder="Entrez pseudo...">
                </div>

                <div class="form-group">
                    <label for="labelForm">Date d'embauche</label>
                    <input type="date" name="date_embauche" class="form-control" placeholder="jj/mm/aaaa">
                </div>

                <input class="btn btn-primary btnListe" type="submit" value="Valider"/>
                <a href="liste.php">Accéder à la liste des utilisateurs</a>
            </form>
        </section>
    </body>
</html> 
