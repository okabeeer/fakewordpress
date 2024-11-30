<?php
session_start();

$server = "localhost";
$username = "root";
$password = "";
$dbname = "dawm";

$conn = new mysqli($server, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Vérifier si le formulaire a été soumis
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $type = "Seller"; // Valeur statique de type

    // Vérifier si l'email est déjà utilisé
    $sql = "SELECT * FROM `User` WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['error'] = "This email is already in use.";
        header("location: register.php");
        exit();
    } else {
        // Sécurisation du mot de passe avec hashage
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insérer le nouvel utilisateur dans la base de données
        $sql = "INSERT INTO `User` (name, email, password, type) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $email, $hashedPassword, $type);

        if ($stmt->execute()) {
            echo "Inscription réussie";
            header("Location: ./SellerDashboard/dashboard-sales.php"); // Redirection après inscription réussie
            exit(); // S'assurer que le script s'arrête après la redirection
        } else {
            $_SESSION['error'] = $stmt->error;
            header("location: register.php");
            exit();
        }
    }

    $stmt->close();
} else {
    $_SESSION['error'] = "Error! The form has not been submitted.";
    header("location: register.php");
    exit();
}

$conn->close();
?>

