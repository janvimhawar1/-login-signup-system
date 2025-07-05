<?php
include 'connect.php';  
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"]);
    $password = $_POST["password"];

    if ($name && $password) {
        $query = "SELECT * FROM users WHERE name = '$name'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) === 1) {
           
            $row = mysqli_fetch_assoc($result);
            $hashed_password = $row['password'];

           
            if (password_verify($password, $hashed_password)) {
                $_SESSION['username'] = $name; 
                header("Location: welcome.php"); 
                exit();     
            } else {
                $_SESSION['error'] = "Incorrect username or password.";
                header("Location: index.php?form=login"); 
                exit();
            }
        } else {
            $_SESSION['error'] = "Incorrect username or password.";
            header("Location: index.php?form=login"); 
            exit();
        }
    } else {
        $_SESSION['error'] = "Please fill all fields.";
        header("Location: index.php?form=login"); 
        exit();
    }
}
?>
