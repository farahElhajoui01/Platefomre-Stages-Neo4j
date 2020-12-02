<?php

session_start();

if(isset($_POST['save'])){


   require '../connection.php';

   if( $_POST['adresse']==null && $_POST['tel']==null){
    $insertOneResult = $db->entreprises->insertOne([

        'raisonSociale' => $_POST['raisonSociale'],
 
        'adresseEmail' => $_POST['adresseEmail'],
        ]);
   }
   elseif( $_POST['adresse']==null && $_POST['tel']!=null){
    $insertOneResult = $db->entreprises->insertOne([

        'raisonSociale' => $_POST['raisonSociale'],
 
        'adresseEmail' => $_POST['adresseEmail'],

        'tel' => $_POST['tel'],

        ]);

   }

   elseif( $_POST['adresse']!=null && $_POST['tel']==null){
    $insertOneResult = $db->entreprises->insertOne([

        'raisonSociale' => $_POST['raisonSociale'],
 
        'adresseEmail' => $_POST['adresseEmail'],

        'adresse' => $_POST['adresse'],

        ]);

   }
   else{
    $insertOneResult = $db->entreprises->insertOne([

        'raisonSociale' => $_POST['raisonSociale'],
 
        'adresseEmail' => $_POST['adresseEmail'],
 
        'adresse' => $_POST['adresse'],
 
        'tel' => $_POST['tel'],
        'rate' => null,
 
    ]);

   }


   $_SESSION['success-insert'] = $_POST['raisonSociale']." created successfully";

   header("Location: index.php");

   
}


?>
