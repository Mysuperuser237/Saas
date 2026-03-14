<?php
// API endpoint pour récupérer le taux de change d'une paire de devises spécifique

// Inclure les fichiers nécessaires (configuration, modèle de taux de change, etc.)

// Récupérer la paire de devises à partir de l'URL
$currencyPair = isset($_GET['currency_pair']) ? $_GET['currency_pair'] : null;

if ($currencyPair) {
    // Récupérer le taux de change de la base de données
    // Vérifier si le taux de change existe

    // Retourner le taux de change au format JSON
    header('Content-Type: application/json');
} else {
    // Gérer l'absence de paire de devises
    http_response_code(400);
    echo json_encode(['message' => 'Currency Pair is required']);
}
?>