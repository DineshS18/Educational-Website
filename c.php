<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link rel="shortcut icon" type="x-icon" href="icon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sample-1</title>
	<link rel="stylesheet" type="text/css" href="cstyle.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<style>
.container
{
  position: relative;
  width: 750px;
  height: 1200px;
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
      <li><a href="#" class="active">C</a></li>
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
      <form action="c.php" method="post">
        <h2>Sample-1</h2>
          <p>//header files<br>
            #include<<s>stdio.h><br>
            #include<<s>conio.h><br>
            //main function<br>
            int main()<br>
            {<br>
            //defining inputs<br>
            int a,b,c;<br>
            //user input 1<br>
            printf("\nEnter the First Number:");<br>
            scanf("%d",&a);<br>
            //user input 2<br>
            printf("\nEnter the Second Number:");<br>
            scanf("%d",&b);<br>
            //calculate the sum<br>
            c=a+b;<br>
            //print the result<br>
            printf("\nThe Sum of Values are:%d",c);<br>
            return 0;<br>
          }
        </p>
        <br>
        <br>
        <h2>Output</h2>
        <img src="p1.jpg">
        <br>
        <video width="320" height="240" controls>
        <source src="Addition.mp4" type="video/mp4">
        <source src="Addition.ogg" type="video/ogg">
        Your browser does not support the video tag.
        </video>
        </form>
      <div><p>Online Compiler: &nbsp<a href="https://www.onlinegdb.com/online_c_compiler">Try It Yourself</a></p></div>
    </div>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <ul>
        <li><a href="cintro.php"><i class="fas fa-stream"></i>Intro</a></li>
        <li><a href="#"><i class="fas fa-stream"></i>Sample-1</a></li>
        <li><a href="c2.php"><i class="fas fa-stream"></i>Sample-2</a></li>
        <li><a href="c3.php"><i class="fas fa-stream"></i>Sample-3</a></li>
        <li><a href="c4.php"><i class="fas fa-stream"></i>Sample-4</a></li>
        <li><a href="c5.php"><i class="fas fa-stream"></i>Sample-5</a></li>
        <li><a href="c6.php"><i class="fas fa-stream"></i>Sample-6</a></li>
      </ul>
    </div>
</body>
</html>