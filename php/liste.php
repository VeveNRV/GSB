<?php
    //Récupère le fichier bdd
    include ('connexionBDD.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Liste des utilisateurs</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>

    <body>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Rôle</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Date de naissance</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Mot de passe</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Code Postal</th>
                    <th scope="col">Pseudo</th>
                    <th scope="col">Date d'embauche</th>
                </tr>
            </thead>

</html>

<?php

    // Récupération des données de la table utilisateur
    $reponse = $bdd ->query('SELECT * FROM utilisateur)');

    //Boucle pour Parcourir tous les champs de la table utilisateur
    while($donnees = $reponse -> fetch())
    {
        echo "<tr>".
                "<td>" .$donnees['id']. "</td>".
                "<td>" .$donnees['role']. "</td>".
                "<td>" .$donnees['nom']. "</td>".
                "<td>" .$donnees['prenom']. "</td>".
                "<td>" .$donnees['email']. "</td>".
                "<td>" .$donnees['mdp']. "</td>".
            "</tr>";        
    }

    //Termine le traitement de la requête
    $reponse->closeCursor();
?>
        </table>
    </body>
</html>