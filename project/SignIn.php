<?php
session_start();
// Connexion à la base de données
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "dawm"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Vérification si le formulaire a été soumis
if (isset($_POST["submit"])) {
    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Requête SQL pour vérifier l'utilisateur
    $sql = "SELECT * FROM `User` WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email); 
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Utilisateur trouvé
        $user = $result->fetch_assoc();
        
        // Vérifier le mot de passe
        if (password_verify($password, $user['password'])) {
            // Connexion réussie
            session_start(); 
            $_SESSION['userID'] = $user['userID']; // Stocker l'ID de l'utilisateur dans la session
            $_SESSION['email'] = $user['email']; // Stocker l'email de l'utilisateur dans la session
            header("Location: dashboard.php"); 
            exit();
        } else {
            // Mot de passe incorrect
            $_SESSION['error'] = "Incorrect password";
           header("location: register.php");
           exit();
        }
    } else {
        // Utilisateur non trouvé
        $_SESSION['error'] = "Email not found";
        header("location: register.php");
        exit();
    }

    $stmt->close();
}

$conn->close();
?>

