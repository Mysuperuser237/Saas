<?php
// API endpoint pour gérer les bénéficiaires

// Inclure les fichiers nécessaires (configuration, modèle de bénéficiaire, etc.)

// Définir la méthode HTTP (GET, POST, etc.)
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        // Récupérer tous les bénéficiaires d'un utilisateur
        break;
    case 'POST':
        // Ajouter un nouveau bénéficiaire
        // Valider les données d'entrée
        // Enregistrer le bénéficiaire dans la base de données
        break;
    default:
        // Gérer les méthodes non autorisées
        http_response_code(405);
        echo json_encode(['message' => 'Method Not Allowed']);
        break;
}

// Retourner la réponse au format JSON
header('Content-Type: application/json');
?>