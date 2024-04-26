<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link rel="shortcut icon" type="x-icon" href="icon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sample-1</title>
	<link rel="stylesheet" type="text/css" href="javastyle.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<style>
  .container
{
  position: relative;
  width: 750px;
  height: 690px;
  background: #1c1c1c;
  border-radius: 10px;
  overflow: hidden;
}

</style>
<body>
  <header id="header">
    <div class ="logo"><a href="#"><img src="icon.png"></a>
    </div>
  <ul class="navigation">
      <li><a href="cintro.php">C</a></li>
      <li><a href="c++intro.php">C++</a></li>
      <li><a href="#" class="active">Java</a></li>
      <li><a href="pythonintro.php">Python</a></li>
      <li><a href="htmlintro.php">HTML</a></li>
    </ul>
    <ul>
      <li><a href="Logout.php">Logout</a></li>
    </ul>
  </header>
  <div class="container">
      <form action="java.php" method="post">
        <h2>Sample-1</h2>
          <p>public class Main<br>
              {<br>
                public static void main(String args[])<br>
                  {<br>
                &nbsp&nbspSystem.out.println("Welcome to our first Java Program..");<br>
                &nbsp&nbspSystem.out.println("--------------End------------------");<br>
                  }<br>
              }
        </p>
        <br>
        <br>
        <h2>Output</h2>
        <br>
        <img src="j1.png">
        <br>
      </form>
      <div><p>Online Compiler: &nbsp<a href="https://www.onlinegdb.com/online_java_compiler">Try It Yourself</a></p></div>
    </div>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <ul>
        <li><a href="javaintro.php"><i class="fas fa-stream"></i>Intro</a></li>
        <li><a href="#"><i class="fas fa-stream"></i>Sample-1</a></li>
        <li><a href="java2.php"><i class="fas fa-stream"></i>Sample-2</a></li>
        <li><a href="java3.php"><i class="fas fa-stream"></i>Sample-3</a></li>
        <li><a href="java4.php"><i class="fas fa-stream"></i>Sample-4</a></li>
        <li><a href="java5.php"><i class="fas fa-stream"></i>Sample-5</a></li>
        <li><a href="java6.php"><i class="fas fa-stream"></i>Sample-6</a></li>
      </ul>
    </div>
</body>
</html>