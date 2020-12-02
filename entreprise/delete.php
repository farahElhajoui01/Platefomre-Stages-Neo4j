<?php

session_start();

if (isset($_POST['delete'])) {

    require '../connection.php';

    $deleteResult = $db->entreprises->deleteOne(['raisonSociale' => $_POST['rs-hidden']]);

    $_SESSION['success-delete'] = $_POST['rs-hidden'] . " deleted successfully";

    header("Location: index.php");

}
