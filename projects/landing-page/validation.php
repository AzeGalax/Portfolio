<?php

function cleanTxt($a) {
    return trim(filter_var($a, FILTER_SANITIZE_STRING));
}

function cleanEmail($a) {
    return trim(filter_var($a, FILTER_SANITIZE_EMAIL));
}

$nom = 'test';
$mail = 'zzrrrz@€efefef/FEfeef';
$message = 'eferzerzerzerzerzerezrerzfr';
// recuperer les valeurs post
//$nom = $_POST['name'];
//$mail = $_POST['mail'];
//$message = $_POST['message'];
$error = false;
$returnMsg = "";

// nettoyer les paramètres
$nom = cleanTxt($nom);
$message = cleanTxt($message);
$mail = cleanEmail($mail);

// validation

if (strlen($nom) === 0) {
    $error = true;
    $returnMsg .= "Le nom est requis";
}


if (strlen($message) === 0) {
    $returnMsg .= "Le message est obligatoire";
    $error = true;
}

if (strlen($mail) === 0) {
    $error = true;
    $returnMsg .="L'e-mail est obligatoire";
} else {
    if (filter_var($mail, FILTER_VALIDATE_EMAIL) === false) {
        $error = true;
        $returnMsg .="L'e-mail est incorrect";
    }
}

if (!$error) {
// construire le corps du mail    
// envoie mail a ladministrateur
}


// message de retour
echo json_encode(array("success" => $error, "message" => $returnMsg));
