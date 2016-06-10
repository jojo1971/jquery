<?php
$db =new mysqli('localhost', 'root', '', 'test2');
if(isset($_POST['nom'], $_POST['message']) && !empty($_POST['nom']) && !empty($_POST['message'])){

    $nom = mysqli_real_escape_string($db,htmlspecialchars(trim($_POST['nom'])));
    $message= mysqli_real_escape_string($db,htmlspecialchars(trim($_POST['message'])));

    $db->query("INSERT INTO sujet(id,nom,message) VALUE ('','$nom','$message')");
    echo '<span class="succes">Vous donnes ont été envoyées</span>';
}else{
    echo '<span class="error">Veuillez completer tous les champs</span>';
}
?>