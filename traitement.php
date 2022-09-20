<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>traitement</title>
</head>
<body>
    <?php
    $utilisateur = $_POST['utilisateur'] ;
    $password = $_POST['password'] ;
    $name  = $_POST['name'] ;
    $email = $_POST['email'] ;
    $phone = $_POST['phone'] ;
    $subject = $_POST['subject'] ;
    
    echo '<h1> UTILISATEUR : '.$utilisateur. '</h1>';
    echo '<h1> PASSWORD : '.$password. '</h1>';
    echo '<h1> NAME : '.$name. '</h1>';
    echo '<h1> EMAIL : '.$email. '</h1>';
    echo '<h1> PHONE : '.$phone. '</h1>';
    echo '<h1> SUBJECT : '.$subject. '</h1>'; 
    ?>
</body>
</html>