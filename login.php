<?php
$servername = "localhost";
$username = "minyemyat";
$password = 'minyemyat';
$dbname = "login_info";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row && password_verify($password, $row['password'])) {
        // Set session variables and redirect to the welcome page
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Redirect to the welcome page
        header("Location: welcome.php");
        exit();
    } else {
        $errorMessage = "Invalid username or password.";
    }

    $stmt->close();
}

$conn->close();
?>
