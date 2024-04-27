<?php
// Assurez-vous qu'il n'y a pas d'espaces ou de lignes avant cette balise PHP.
// $folderPath = "C:/xampp/htdocs/lesptitsplandecoline/src/img/Projets"; // Modifiez le chemin d'accès selon votre structure de répertoire.
$folderPath = "../img/projets/"; // Modifiez le chemin d'accès selon votre structure de répertoire.

$images = glob($folderPath . "*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);
$results = [];
$name = "";
// if (!file_exists($folderPath)) {
//     die("Le dossier n'existe pas: $folderPath");
// } else {
//     echo "Le dossier existe : $folderPath<br>";
// }

// foreach ($images as $image) {
//     echo $image;
// }
// C:\xampp\htdocs\lesptitsplandecoline\src\img\Projets
foreach ($images as $image) {
    // Assurez-vous que le chemin de l'image est relatif au dossier accessible depuis le web.
    $relativeImagePath = str_replace($_SERVER['DOCUMENT_ROOT'], '', $image);
    $relativeImagePath = ltrim($relativeImagePath, '/'); // Assurez-vous qu'il n'y a pas de slash initial.
    $info = pathinfo($image);
    $name = str_replace('_',' ',$info['filename']); // Assurez-vous qu'il n'y a pas de slash initial.
    $results[] = [
        'name' => $name,  // Utilisez filename pour obtenir le nom sans extension.
        'image' => $relativeImagePath // Chemin relatif nécessaire pour l'affichage web.
    ];
}

// Encode les résultats en JSON et vérifiez les erreurs.
$jsonResults = json_encode($results);
if ($jsonResults === false) {
    // Affiche l'erreur si l'encodage JSON échoue.
    echo "Erreur d'encodage JSON : " . json_last_error_msg();
} else {
    // Envoie le bon en-tête de contenu et affiche les résultats.
    header('Content-Type: application/json');
    echo $jsonResults;
}
