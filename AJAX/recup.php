<?php

$db =new mysqli('localhost', 'root', '', 'test2');
$messages = array();

$recup_messages = $db->query("SELECT * FROM sujet ORDER BY id DESC");


while($all = $recup_messages->fetch_assoc()){

    $messages[]=$all;
}


foreach($messages as $message){
?>
<h4><?php echo $message['nom'] ?></h4>
<p><?php echo $message['message'] ?></p>
    <hr>

<?php
}
?>
