<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre</title>
</head>
<body>
<?php
    $prenom = $_POST['prenom'] ;
    $nom = $_POST['nom'] ;
    $phone = $_POST['phone'] ;
    $psw = $_POST['psw'] ;
    // $pswrepeat = $_POST['pswrepeat'] ;
    

    echo '<h1> PRENOM : '.$prenom. '</h1>';
    echo '<h1> NOM : '.$nom. '</h1>';
    echo '<h1> PHONE : '.$phone. '</h1>';
    echo '<h1> PSW : '.$psw. '</h1>'; 
    // echo '<h1> PSWREPEAT : '.$pswrepeat. '</h1>'; 
    ?> 
</body>
</html>
