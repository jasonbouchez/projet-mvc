<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task";

//  nouvelle instance PDO 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Vérifi si c'est  une requête POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Récupérez les données JSON envoyées
    $json_data = file_get_contents("php://input");
    
    $data = json_decode($json_data, true);
    // Vérifiez si les données nécessaires sont présentes


    if (isset($data['nom']) && isset($data['prenom'])) {
       
        // Récupérez les valeurs nom et prénom depuis les données JSON
        $nom = $data['nom'];
    }
} 
else {
    
    $sql = "SELECT * FROM taske";
    $stmt = $conn->query($sql);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

  
    $response = $data;
}

// Retournez une réponse au format JSON
header('Content-Type: application/json');
echo json_encode($response);
?>