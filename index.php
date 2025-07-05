<?php
session_start();     
$error = $_SESSION['error'] ?? '';
unset($_SESSION['error']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login / Signup</title>
  <link rel="stylesheet" href="main.css">
<body>

<header>
  <div class="nav-left">
    <a href="#">Home</a>
    <a href="#">Services</a>
    <a href="#">Blogs</a>
    <a href="#">Company</a>
  </div>
  <div class="nav-right">
    <button onclick="showForm('signup')">Sign Up</button>
    <button onclick="showForm('login')">Log In</button>
  </div>
</header>


<div class="container">
    <p style="color:white; text-align:center; font-size:23px;"><?php echo $error; ?></p>

  <!-- SIGN UP FORM -->
  <form id="signupForm" action="signup.php" method="POST">
  <h2>Sign Up</h2>
  <input type="text" name="name" placeholder="Full Name" required>
  <input type="email" name="email" placeholder="Email" required>
  <input type="date" name="dob" required>
  <input type="password" name="password" placeholder="Password" required>
  <button type="submit">Sign Up</button>
</form>


  <!-- LOGIN FORM -->
  <form id="loginForm" action="login.php" method="POST" style="display: none;">
    <h2>Log In</h2>
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Log In</button>
  </form>
</div>

<script>
  function showForm(type) {
    document.getElementById("signupForm").style.display = type === 'signup' ? "block" : "none";
    document.getElementById("loginForm").style.display = type === 'login' ? "block" : "none";
  }

  window.onload = function () {
    const formType = new URLSearchParams(window.location.search).get('form');
    if (formType === 'login') {
      showForm('login');
    } else {
      showForm('signup');
    }
  };
</script>
</body>
</html>
