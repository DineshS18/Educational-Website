<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link rel="shortcut icon" type="x-icon" href="icon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sample-1</title>
	<link rel="stylesheet" type="text/css" href="c++style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  <header id="header">
    <div class ="logo"><a href="#"><img src="icon.png"></a>
    </div>
  <ul class="navigation">
      <li><a href="cintro.php">C</a></li>
      <li><a href="#" class="active">C++</a></li>
      <li><a href="javaintro.php">Java</a></li>
      <li><a href="pythonintro.php">Python</a></li>
      <li><a href="htmlintro.php">HTML</a></li>
    </ul>
    <ul>
      <li><a href="Logout.php">Logout</a></li>
    </ul>
  </header>
  <div class="container">
      <form action="c++.php" method="post">
        <h2>Sample-1</h2>
          <p>#include<<i>iostream><br>
            #include<<i>conio.h><br>
            using namespace std;<br>
            int main()<br>
             {<br>
              int a,b,c;<br>
              cout<<"Enter the First Number:"<<<endl;>endl;<br>
              cin>>a;<br>
              cout<<"Enter the Second Number:"<<<endl;>endl;<br>
              cin>>b;<br>
              c=a+b;<br>
              cout<<"The Sum of Values are:"<<<c;>c<<<endl;>endl;<br>
              return 0;<br>
            }
        </p>
        <br>
        <br>
        <h2>Output</h2>
        <img src="p1.jpg">
      </form>
      <div><p>Online Compiler: &nbsp<a href="https://www.onlinegdb.com/online_c++_compiler#">Try It Yourself</a></p></div>
    </div>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <ul>
        <li><a href="c++intro.php"><i class="fas fa-stream"></i>Intro</a></li>
        <li><a href="#"><i class="fas fa-stream"></i>Sample-1</a></li>
        <li><a href="c++2.php"><i class="fas fa-stream"></i>Sample-2</a></li>
        <li><a href="c++3.php"><i class="fas fa-stream"></i>Sample-3</a></li>
        <li><a href="c++4.php"><i class="fas fa-stream"></i>Sample-4</a></li>
        <li><a href="c++5.php"><i class="fas fa-stream"></i>Sample-5</a></li>
        <li><a href="c++6.php"><i class="fas fa-stream"></i>Sample-6</a></li>
        <li><a href="c++7.php"><i class="fas fa-stream"></i>Sample-7</a></li>
        <li><a href="c++8.php"><i class="fas fa-stream"></i>Sample-8</a></li>
      </ul>
    </div>
</body>
</html>