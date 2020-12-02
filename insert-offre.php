<?php

require __DIR__ . '/connection.php';

// Selecting the collection
$collection = $db->offres;

if (isset($_POST["save"])) {
    $date = date("d-m-Y");

    if (isset($_FILES["file"]) && $_FILES['file']['size'] > 0) {
        $path = "images/offres/";

        $file_name = $_FILES['file']['name'];

        $ext_arr = explode('.', strrev($file_name));
        $ext = $ext_arr[0];

        $dir = $path . $file_name;

        if (count($ext_arr) > 1) {
            if (move_uploaded_file($_FILES['file']['tmp_name'], $path . $file_name)) {
                if (@rename($path . $file_name, $dir)) {
                    try {
                        $collection->insertOne(["date" => $date, "image" => $dir, "utilisateur" => ["prenom" => 'nom5', "nom" => 'prenom5']]);
                        header("Location: index.php");
                    } catch (MongoException $ex) {
                        echo "There was some problem. " . $ex;
                    }
                } else {
                    echo "iiiiiiiiiiiiii";
                }
            } else {
                echo "xxxxxxxxxxxxxxxSorry, there was a problem. Please Try again";
            }

        } else {
            echo "Invalid File Name!";
        }
    } else {
        $collection->insertOne(["description" => $_POST['offreDescription'], "date" => $date, "utilisateur" => ["prenom" => 'nom5', "nom" => 'prenom5']]);
        header("Location: index.php");

    }
} else {
    echo "Sssssssssssssssorry, there was a problem. Please Try again";
}