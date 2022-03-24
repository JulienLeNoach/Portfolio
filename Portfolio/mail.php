<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    if( isset( $_POST['nom']) && isset( $_POST['prenom']) && isset($_POST['mail']) ){
$to="root@ServLinux01.local";
$subjet="Nouveau message de ".$_POST['nom'].' '.$_POST['prenom'];
$message = $_POST['mail'];
mail($to, $subjet,$message);
header('Location: index.php?success=true#sent');}?>
</body>

</html>