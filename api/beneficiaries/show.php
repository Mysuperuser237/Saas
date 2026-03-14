<?php
// API endpoint pour afficher, modifier ou supprimer un bénéficiaire spécifique par ID

// Inclure les fichiers nécessaires (configuration, modèle de bénéficiaire, etc.)

// Récupérer l'ID du bénéficiaire à partir de l'URL
$beneficiaryId = isset($_GET['id']) ? $_GET['id'] : null;

// Définir la méthode HTTP (GET, PUT, DELETE)
$method = $_SERVER['REQUEST_METHOD'];

if ($beneficiaryId) {
    switch ($method) {
        case 'GET':
            // Récupérer le bénéficiaire de la base de données
            // Vérifier si le bénéficiaire existe
            break;
        case 'PUT':
            // Mettre à jour le bénéficiaire
            // Valider les données d'entrée
            // Enregistrer les modifications dans la base de données
            break;
        case 'DELETE':
            // Supprimer le bénéficiaire de la base de données
            break;
        default:
            http_response_code(405);
            echo json_encode(['message' => 'Method Not Allowed']);
            break;
    }

    // Retourner la réponse au format JSON
    header('Content-Type: application/json');
} else {
    // Gérer l'absence d'ID
    http_response_code(400);
    echo json_encode(['message' => 'Beneficiary ID is required']);
}
?>