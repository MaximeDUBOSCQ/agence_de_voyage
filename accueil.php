<?php
    session_start();
    if (!isset($_SESSION["login"])) {
        header('location:identification.php');
    }
    else {
        $id = $_SESSION["login"];
        $prenom = $_SESSION["prenom"];
    }
?>
<html>
<head>
    <title>Accueil</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <center>
        <font size="50">Bienvenue <?php echo $prenom; ?></font>
        <br/><br/>
        <a href='traitement_deconnexion.php'>Deconnexion</a>&nbsp;&nbsp;-&nbsp;&nbsp;
        <a href='modifier.php'>Modifier le compte</a>&nbsp;&nbsp;-&nbsp;&nbsp;
        <a href='modifierMotDePasse.php'>Modifier le mot de passe</a>&nbsp;&nbsp;-&nbsp;&nbsp;
        <a href='confirmation_suppression.php'>Supprimer le compte</a>
        <?php echo password_hash(78, PASSWORD_DEFAULT); ?>
    </center>
</body>
</html> 