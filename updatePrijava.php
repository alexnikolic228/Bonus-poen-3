<?php
require 'dbBroker.php'; // Include your database connection
require 'Prijava.php';  // Include your Prijava class, if you have one

if (isset($_POST['id_predmeta'])) {
    $id = $_POST['id_predmeta'];
    $predmet = $_POST['predmet'];
    $katedra = $_POST['katedra'];
    $sala = $_POST['sala'];
    $datum = $_POST['datum'];

    $isUpdated = update($id, $predmet, $katedra, $sala, $datum);
    
    if ($isUpdated) {
        header("Location: index.php?success=1"); // Redirect with a success message
    } else {
        header("Location: index.php?error=1");   // Redirect with an error message
    }
}
?>