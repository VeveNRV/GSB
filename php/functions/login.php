<?php
if (isset($_POST['role'])){
    echo $_POST['role'];
}
if (isset($_POST['nom'])){
    echo $_POST['nom'];
}
if (isset($_POST['prenom'])){
    echo $_POST['prenom'];
}
/*if (isset($_POST['dateNaissance'])){
    echo $_POST['dateNaissance'];
}
if (isset($_POST['adressePostal'])){
    echo $_POST['adressePostal'];
}
if (isset($_POST['codePostal'])){
    echo $_POST['codePostal'];
}*/
if (isset($_POST['email'])){
    echo $_POST['email'];
}
if (isset($_POST['mdp'])){
    echo $_POST['mdp'];

/*if (isset($_POST['pseudo'])){
    echo $_POST['pseudo'];
}
if (isset($_POST['dateEmbauche'])){
    echo $_POST['dateEmbauche'];*/

    
    // Insertion en bdd
    session_start();
    $_SESSION["newuser"] = true;
    header('Location: ../index.php');
}else{
    header('Location: ../index.php');
}
?>