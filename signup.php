<?php
include 'connect.php';  

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $dob = $_POST["dob"];
    $password = $_POST["password"];

    $errors = [];

    if (strlen($name) < 3) $errors[] = "Name must be at least 3 characters.";
    if (!preg_match("/^[a-zA-Z]/", $email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
        $errors[] = "Invalid email format.";
    if (strtotime($dob) > time()) $errors[] = "DOB cannot be in the future.";
    if (strlen($password) < 8) $errors[] = "Password must be at least 8 characters.";

    
    if (empty($errors)) {
        
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        $query = "INSERT INTO users (name, email, dob, password) 
                  VALUES ('$name', '$email', '$dob', '$hashed_password')";

        mysqli_query($conn, $query) or die("Error: " . mysqli_error($conn));
        echo "Signup successful!";
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
?>



