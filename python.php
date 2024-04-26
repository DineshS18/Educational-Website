<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link rel="shortcut icon" type="x-icon" href="icon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sample-1</title>
	<link rel="stylesheet" type="text/css" href="pythonstyle.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<style>
.container{
  height: 840px;
}
</style>
<body>
  <header id="header">
    <div class ="logo"><a href="#"><img src="icon.png"></a>
    </div>
  <ul class="navigation">
      <li><a href="cintro.php">C</a></li>
      <li><a href="c++intro.php">C++</a></li>
      <li><a href="javaintro.php">Java</a></li>
      <li><a href="#" class="active">Python</a></li>
      <li><a href="htmlintro.php">HTML</a></li>
    </ul>
    <ul>
      <li><a href="Logout.php">Logout</a></li>
    </ul>
  </header>
  <div class="container">
      <form action="python.php" method="post">
        <h2>Sample-1</h2><br>
          <p># Python program to add two numbers<br>
            #We take two numbers as a user input<br>
            print("--------------------------------")<br>
            print("Adding Two Number Print In Float")<br>
            print("--------------------------------")<br>
            number1 = input("First number: ")<br>
            number2 = input("\nSecond number: ")<br>
            # Adding two numbers<br>
            # User might also enter float numbers<br>
            sum = float(number1) + float(number2)<br>
            # Display the sum<br>
            # will print value in float<br>
            print("The sum of {0} and {1} is {2}" .format(number1, number2, sum))<br>
        </p>
        <br>
        <br>
        <h2>Output</h2>
        <img src="py1.png">
      </form>
      <div><p>Online Compiler: &nbsp<a href="https://www.onlinegdb.com/online_python_compiler">Try It Yourself</a></p></div>
    </div>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <ul>
        <li><a href="pythonintro.php"><i class="fas fa-stream"></i>Intro</a></li>
        <li><a href="#"><i class="fas fa-stream"></i>Sample-1</a></li>
        <li><a href="python2.php"><i class="fas fa-stream"></i>Sample-2</a></li>
        <li><a href="python3.php"><i class="fas fa-stream"></i>Sample-3</a></li>
        <li><a href="python4.php"><i class="fas fa-stream"></i>Sample-4</a></li>
        <li><a href="python5.php"><i class="fas fa-stream"></i>Sample-5</a></li>
        <li><a href="python6.php"><i class="fas fa-stream"></i>Sample-6</a></li>
      </ul>
    </div>
</body>
</html>