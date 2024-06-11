<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    body {
      background-image: url('tealbg.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    .container {
      display: flex;
      flex-direction: column; /* Align items in a column layout */
      justify-content: center;
      align-items: center;
      padding: 20px;
      height: 100vh;
    }

    .login {
      background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent background to the login form */
      border-radius: 10px;
      padding: 65px;
      width: 400px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      text-align: center;
    }

    /* Style for the "Sign Up" button */
    .signup-button {
      margin-top: 20px; /* Add more space above the button */
      background-color: #007BFF; /* Adjust the button's background color */
      color: #fff; /* Adjust the text color */
      padding: 10px 20px; /* Add some padding to the button */
      border: none;
      border-radius: 50px;
      cursor: pointer;
      font-weight: bold;
      display: inline-block; /* Display the button inline with the text */
      text-decoration: none; /* Remove underline from the link */
    }

    .signup-text {
      margin-top: 10px; /* Add space above the text */
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login">
      <h1>Login</h1>
      <form method="POST" action="login.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>
        <button type="submit">Login</button>
      </form>
      <p class="signup-text">Don't have an account?</p> <!-- Add a sentence "Don't have an account" -->
      <a class="signup-button" href="newsignup.php">Sign Up</a> <!-- Add the "Sign Up" button that links to newsignup.php -->
    </div>
  </div>
</body>
</html>
