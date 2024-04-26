<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link rel="shortcut icon" type="x-icon" href="icon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Intro</title>
	<link rel="stylesheet" type="text/css" href="pythonstyle.css">
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
  height: 1360px;
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
      <li><a href="javaintro.php">Java</a></li>
      <li><a href="#" class="active">Python</a></li>
      <li><a href="htmlintro.php">HTML</a></li>
    </ul>
    <ul>
      <li><a href="Logout.php">Logout</a></li>
    </ul>
  </header>
  <div class="container">
      <form action="pythonintro.php" method="post">
        <div class="intro">
          <h2>Python Intro:</h2><br>
        </div>
        <h2>What is Python?</h2>
          <p>
            <br>
              ->Python is a popular programming language. It was created by Guido van Rossum, and released in 1991.<br>
              ->It is used for:<br>
                  &nbsp&nbsp✔web development (server-side),<br>
                  &nbsp&nbsp✔software development,<br>
                  &nbsp&nbsp✔mathematics,<br>
                  &nbsp&nbsp✔system scripting.<br>
        </p>
        <br>
        <h2>Why can python Do?</h2>
        <p>
          <br>
          ->Python can be used on a server to create web applications.<br>
          ->Python can be used alongside software to create workflows.<br>
          ->Python can connect to database systems. It can also read and modify files.<br>
          ->Python can be used to handle big data and perform complex mathematics.<br>
          ->Python can be used for rapid prototyping, or for production-ready software development.<br>
        </p>
        <br>
        <h2>Why Python?</h2>
        <p>
          <br>
          ->Python works on different platforms (Windows, Mac, Linux, Raspberry Pi, etc).<br>
          ->Python has a simple syntax similar to the English language.<br>
          ->Python has syntax that allows developers to write programs with fewer lines than some other programming languages.<br>
          ->Python runs on an interpreter system, meaning that code can be executed as soon as it is written. This means that prototyping can be very quick.<br>
          ->Python can be treated in a procedural way, an object-oriented way or a functional way.<br>
        </p>
        <br>
        <h2>Execute Python Syntax</h2>
        <p>
          <br>
          <h2>Example:</h2><br>
        </p>
        <p>
          >>> print("Hello, World!")<br>
          Hello, World!</p><br>
          <p>->Or by creating a python file on the server, using the .py file extension, and running it in the Command Line:</p>
          <br>
          <p>C:\Users\Your Name>python myfile.py</p><br>
          <br>
          <p>
          <h2>Indication:</h2></p><br>
          <p>
          ->Indentation refers to the spaces at the beginning of a code line.<br>
          ->Where in other programming languages the indentation in code is for readability only, the indentation in Python is very important.<br>
          ->Python uses indentation to indicate a block of code.<br><br>
          </p>
      </form><br>
      <div><p>Here some of samples: &nbsp<a href="python.php">Study it</a></p></div>
    </div>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <ul>
        <li><a href="#"><i class="fas fa-stream"></i>Intro</a></li>
        <li><a href="python.php"><i class="fas fa-stream"></i>Sample-1</a></li>
        <li><a href="python2.php"><i class="fas fa-stream"></i>Sample-2</a></li>
        <li><a href="python3.php"><i class="fas fa-stream"></i>Sample-3</a></li>
        <li><a href="python4.php"><i class="fas fa-stream"></i>Sample-4</a></li>
        <li><a href="python5.php"><i class="fas fa-stream"></i>Sample-5</a></li>
        <li><a href="python6.php"><i class="fas fa-stream"></i>Sample-6</a></li>
      </ul>
    </div>
</body>
</html>