<?php
// Configuration de la base de données
define('DB_HOST', 'localhost');
define('DB_NAME', 'paysaf');
define('DB_USER', 'root');
define('DB_PASS', '');

// Configuration des clés API des fournisseurs de paiement
define('MTN_MOMO_API_KEY', 'YOUR_MTN_MOMO_API_KEY');
define('ORANGE_MONEY_API_KEY', 'YOUR_ORANGE_MONEY_API_KEY');
// ...

// Configuration du serveur d'email
define('SMTP_HOST', 'smtp.example.com');
define('SMTP_PORT', 587);
define('SMTP_USER', 'your_email@example.com');
define('SMTP_PASS', 'your_email_password');

// Autres configurations
define('BASE_URL', 'http://localhost/paysaf');
?>