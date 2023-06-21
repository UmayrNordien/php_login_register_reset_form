<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Welcome to ChronoSync Dashboard</title>
    <meta name="description" content="ChronoSync clock in System">
    <meta name="keywords" content="php login register password reset">
    <meta name="author" content="ClockOps">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Welcome to ChronoSync Dashboard</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans&family=Oswald&display=swap');

body {
    font-size: 14px;
    font-family: 'Noto Sans', sans-serif;
    text-align: center;
}

      h1 {
        font-size: 36px;
        margin-top: 50px;
        margin-bottom: 20px;
      }

      h2{
        font-family: 'Noto Sans', sans-serif;
        font-family: 'Oswald', sans-serif;
      }

      .navbar {
        background-color: #007bff;
      }

      .navbar-brand,
      .navbar-text {
        color: #ffffff;
      }

      .nav-link {
        color: #ffffff;
      }

      .btn {
        font-size: 18px;
        padding: 10px 20px;
        margin-right: 10px;
        font-family: lato;
      }

      .btn-success {
        background-color: #28a745;
        border-color: #28a745;
      }

      .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
      }

      section{
        height: 69vh;
        background-color: #e5e5f7;
opacity: 0.2;
background-image:  linear-gradient(#444cf7 1px, transparent 1px), linear-gradient(to right, #444cf7 1px, #e5e5f7 1px);
background-size: 20px 20px;
      }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="#">ChronoSync Dashboard</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
        </ul>
      </div>
    </nav>
    <h1>
      Welcome to ChronoSync Dashboard,
      <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>
    </h1>
    <p>
      <a href="reset_password.php" class="btn btn-success"
        >Reset Your Password</a
      >
      <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>

    <section>

    </section>
  </body>
</html>