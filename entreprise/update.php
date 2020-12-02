<?php

session_start();

if(isset($_POST['update'])){


   require '../connection.php';

   if( $_POST['adresse']==null && $_POST['tel']==null){

    $updateResult = $db->entreprises->updateOne(
        ['raisonSociale' => $_POST['rs-hidden']],
        ['$set' => [ 'raisonSociale' => $_POST['raisonSociale'],
        'adresseEmail' => $_POST['adresseEmail']]]
    );
  
   }
   elseif( $_POST['adresse']==null && $_POST['tel']!=null){

    $updateResult = $db->entreprises->updateOne(
        ['raisonSociale' => $_POST['rs-hidden']],
        ['$set' => [ 'raisonSociale' => $_POST['raisonSociale'],
        'adresseEmail' => $_POST['adresseEmail'],
        'tel' => $_POST['tel'],]]
    );

  

   }

   elseif( $_POST['adresse']!=null && $_POST['tel']==null){
    $updateResult = $db->entreprises->updateOne(
        ['raisonSociale' => $_POST['rs-hidden']],
        ['$set' => [ 'raisonSociale' => $_POST['raisonSociale'],
        'adresseEmail' => $_POST['adresseEmail'],
        'adresse' => $_POST['adresse'],]]
    );

   }
   else{
    $updateResult = $db->entreprises->updateOne(
        ['raisonSociale' => $_POST['rs-hidden']],
        ['$set' => [ 'raisonSociale' => $_POST['raisonSociale'],
        'adresseEmail' => $_POST['adresseEmail'],
        'adresse' => $_POST['adresse'],
        'tel' => $_POST['tel'],]]
    );

   }


   $_SESSION['success-update'] = $_POST['raisonSociale']." updated successfully";

   header("Location: index.php");

}


?>