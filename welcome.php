<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>LogIn Page</title>
  <style>
  body {
    font-family: sans-serif;
    background:rgb(58, 57, 57);
    text-align: center;
    padding-top: 50px;
  }
  .box {
    background: white;
    padding: 30px;
    border-radius: 10px;
    display: inline-block;
    box-shadow: 0 5px 15px rgba(255, 255, 255, 0.3);
  }
  .box p{
    font-size:18px;
  }
  .box a{
    font-size: 20px;
    color: black;
  }
  .box a:hover{
    color:red;
  }
    </style>
</head>
<body>
  <div class="box">
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>! 🎉</h1>
    <p>You have successfully logged in.</p>
    <a href="logout.php">Logout</a>
  </div>
</body>
</html>
