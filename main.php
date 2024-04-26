<?php
session_start();
if (!isset($_SESSION["user"])) {
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link rel="shortcut icon" type="x-icon" href="icon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Main Page</title>
	<link rel="stylesheet" type="text/css" href="mainstyle.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  <header id="header">
    <div class ="logo"><a href="#"><img src="icon.png"></a>
    </div>
  <ul class="navigation">
      <li><a href="cintro.php">C</a></li>
      <li><a href="c++intro.php">C++</a></li>
      <li><a href="javaintro.php">Java</a></li>
      <li><a href="pythonintro.php">Python</a></li>
      <li><a href="htmlintro.php">HTML</a></li>
    </ul>
    <ul>
      <li><a href="Logout.php">Logout</a></li>
    </ul>
  </header>
  <div class="container">
      <form action="main.php" method="post">
        <div class="intro">
          <h2>Learn to Code</h2><br><br>
        </div>
          <p>Welcome to our educational website for code learners! Our Website is dedicated to providing you with comprehensive resources and tools to help you learn codind and programming languages. Whether you are a beginner just starting out our platform has everything you need to achieve your coding goals. Here, our webiste providing to learn coding with understandable Comment lines as well as Audio and Video for our user in this online platform. 
          </p>
      </form><br>
    </div>
</body>
</html>