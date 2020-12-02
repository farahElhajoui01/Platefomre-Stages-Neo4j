<?php

//session_start();

if(isset($_POST['liker'])){

    var_dump($_POST['liker']."dddddddddddddddd");

   require '../connection.php';

  $new_rate=$_POST['like']+1;
  var_dump($new_rate."the new rate");
  var_dump($_POST['id']."the id");

    $updateResult = $db->entreprises->updateOne(
        ['ID' => $_POST['id']],
        ['$set' => [ 'like' => $new_rate,
       
        
        ]]
    );

   


  // $_SESSION['success-update'] = $_POST['raisonSociale']." updated successfully";

   header("Location: index.php");

}
else

var_dump("heeeeeeeeeeeeeeeeeey");


?>