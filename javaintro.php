<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link rel="shortcut icon" type="x-icon" href="icon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Intro</title>
	<link rel="stylesheet" type="text/css" href="javastyle.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<style>
  @import url('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap');
@import url('https://fonts.googleapis.com/css?family=Rancho&display=swap');
*

{
  margin:0;
  padding:0;
  list-style: none;
  text-decoration: none;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body
{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background-image: linear-gradient(rgba(0, 0, 50, 0.8),rgba(0, 0, 50, 0.8)),url(home.jpeg);
  background-position: center;
  background-size: cover;
  position: relative;
  overflow-x: hidden;
  min-height: 100vh;
}
#header
{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  padding: 10px 30px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: midnightblue;
}
#header div a
{
  padding: 30px -60px;
}
#header div img
{
  width:60px;
}
#header ul
{
  padding 30px 70px;
  display: flex;
  justify-content: center;
  align-items: center;
}
#header ul li
{
  list-style: none;
  margin-left: 20px;
}
#header ul li a
{
  text-decoration: none;
  padding: 6px 15px;
  color: #fff;
  border-radius: 20px;
}
#header ul li a:hover,
#header ul li a.active
{
  background: #094b65;
  color: #fff;
}
#header .navigation
{
  position: relative;
  display: flex;
  top: 0px;
  left: -310px;
  justify-content: center;
  align-items: center;
  gap: 10px;
}
#header .navigation li
{
  list-style: none;
}
#header .navigation li a
{
  text-decoration: none;
  padding: 6px 15px;
  color: #fff;
  border-radius: 20px;
}
#header .navigation li a:hover,
#header .navigation li a.active
{
  background: #112434;
  color: #fff;
}
.container{
  top: 150px;
  left: 30px;
  max-width: 1200px;
  margin:0 auto;
  padding: 50px;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.form-group{
  margin-bottom: 30px;
}
.container
{
  position: relative;
  width: 1300px;
  height: 1900px;
  background: #1c1c1c;
  border-radius: 10px;
  overflow: hidden;
}
.container p{
  color: #fff;
}
.container form h2{
  text-align: left;
  color: #fff;
}
.sidebar{
  position: fixed;
  top: 100px;
  left: -250px;
  width: 250px;
  height: -300px;
  background: #042331;
  transition: all .5s ease;
}
.sidebar ul a{
  display: block;
  height: 10%;
  width: 100%;
  line-height: 50px;
  font-size: 20px;
  color: white;
  padding-left: 30px;
  box-sizing: border-box;
  border-top: 1px solid rgba(255, 255, 255, .1);
  border-bottom: 1px solid black;
}
ul li:hover a{
  padding-left: 50px;
}
.sidebar ul a i{
  margin-right: 16px;
}
#check{
  display: none;
}
label #btn,label #cancel{
  position: absolute;
  cursor: pointer;
  background: #042331;
  border-radius: 3px;
}
label #btn{
  left: 30px;
  top: 90px;
  font-size: 35px;
  color: white;
  padding: 6px 12px;
  transition: all .5s;
}
label #cancel{
  z-index: 1111;
  left: -195px;
  top: 17px;
  font-size: 30px;
  color: #0a5275;
  padding: 4px 9px;
  transition: all .5s ease;
}
#check:checked ~ .sidebar{
  left: 0;
}
#check:checked ~ label #btn{
  left: 250px;
  opacity: 0;
  pointer-events: none;
}
#check:checked ~ label #cancel{
  left: 195px;
}
.container a{
  color: blueviolet;
}
.intro h2{
  text-decoration: underline;
}
.maincontent p{
  text-decoration: underline;
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
      <form action="javaintro.php" method="post">
        <div class="intro">
          <h2>Java Intro:</h2><br>
        </div>
        <h2>What is Java?</h2>
          <p>
            <br>
              ->Java is a popular programming language, created in 1995.<br>
              ->It is owned by Oracle, and more than 3 billion devices run Java.<br>
              ->It is used for:<br><br>
                  &nbsp&nbsp✔Mobile applications (specially Android apps)<br>
                  &nbsp&nbsp✔Desktop applications<br>
                  &nbsp&nbsp✔Web applications<br>
                  &nbsp&nbsp✔Web servers and application servers<br>
                  &nbsp&nbsp✔Games<br>
                  &nbsp&nbsp✔Database connection<br>
                  &nbsp&nbsp✔And much, much more!<br>
        </p>
        <br>
        <h2>Why Use Java?</h2>
        <p>
          <br>
          ->Java works on different platforms (Windows, Mac, Linux, Raspberry Pi, etc.)<br>
          ->It is one of the most popular programming language in the world<br>
          ->It has a large demand in the current job market<br>
          ->It is easy to learn and simple to use<br>
          ->It is open-source and free<br>
          ->It is secure, fast and powerful<br>
          ->It has a huge community support (tens of millions of developers)<br>
          ->Java is an object oriented language which gives a clear structure to programs and allows code to be reused, lowering development costs<br>
          ->As Java is close to C++ and C#, it makes it easy for programmers to switch to Java or vice versa
        </p>
        <br>
        <h2>Simple Syntax</h2>
        <p>
          <br>
          <h2>Example:</h2><br>
        </p>
        <p>
          public class Main {<br>
            public static void main(String[] args) {<br>
              System.out.println("Hello World");<br>
            }<br>
          }</p><br>
          <br>
          <p>
          <h2>Example explained:</h2></p><br>
          <p>
          Every line of code that runs in Java must be inside a class. In our example, we named the class Main. A class should always start with an uppercase first letter.<br><br>
          <div class="maincontent">
            <p>
            &nbsp&nbspNote: Java is case-sensitive: "MyClass" and "myclass" has different meaning.<br></p></div><br>
          <p>
          The name of the java file must match the class name. When saving the file, save it using the class name and add ".java" to the end of the filename. To run the example above on your computer, make sure that Java is properly installed: Go to the Get Started Chapter for how to install Java. The output should be:<br><br>
          <p>&nbsp&nbsp->Hello World</p><br>
          </p>
          <p>
          The main Method:<br>
          The main() method is required and you will see it in every Java program:<br><br>
          &nbsp&nbsp->public static void main(String[] args)<br><br>
          Any code inside the main() method will be executed. Don't worry about the keywords before and after main. You will get to know them bit by bit while reading this tutorial.<br>
          For now, just remember that every Java program has a class name which must match the filename, and that every program must contain the main() method.<br><br></p>
        </p>
        <p>System.out.println():<br>
          Inside the main() method, we can use the println() method to print a line of text to the screen:
          <br><br>
          public static void main(String[] args) {<br>
            System.out.println("Hello World");<br>
          }</p>
      </form><br>
      <div><p>Here some of samples: &nbsp<a href="java.php">Study it</a></p></div>
    </div>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <ul>
        <li><a href="#"><i class="fas fa-stream"></i>Intro</a></li>
        <li><a href="java.php"><i class="fas fa-stream"></i>Sample-1</a></li>
        <li><a href="java2.php"><i class="fas fa-stream"></i>Sample-2</a></li>
        <li><a href="java3.php"><i class="fas fa-stream"></i>Sample-3</a></li>
        <li><a href="java4.php"><i class="fas fa-stream"></i>Sample-4</a></li>
        <li><a href="java5.php"><i class="fas fa-stream"></i>Sample-5</a></li>
        <li><a href="java6.php"><i class="fas fa-stream"></i>Sample-6</a></li>
      </ul>
    </div>
</body>
</html>