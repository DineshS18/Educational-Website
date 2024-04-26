<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link rel="shortcut icon" type="x-icon" href="icon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Intro</title>
	<link rel="stylesheet" type="text/css" href="c++style.css">
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
  height: 1500px;
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
      <form action="c++intro.php" method="post">
        <div class="intro">
          <h2>C++ Intro:</h2><br>
        </div>
        <h2>What is C++?</h2>
          <p>
            <br>
            ->C++ is a cross-platform language that can be used to create high-performance applications.<br>
            ->C++ was developed by Bjarne Stroustrup, as an extension to the C language.<br>
            ->C++ gives programmers a high level of control over system resources and memory.<br>
            ->The language was updated 4 major times in 2011, 2014, 2017, and 2020 to C++11, C++14, C++17, C++20.
        </p>
        <br>
        <h2>Why Use C++?</h2>
        <p>
          <br>
          ->C++ is one of the world's most popular programming languages.<br>
          ->C++ can be found in today's operating systems, Graphical User Interfaces, and embedded systems.<br>
          ->C++ is an object-oriented programming language which gives a clear structure to programs and allows code to be reused, lowering development costs.<br>
          ->C++ is portable and can be used to develop applications that can be adapted to multiple platforms.<br>
          ->C++ is fun and easy to learn!<br>
          ->As C++ is close to C, C# and Java, it makes it easy for programmers to switch to C++ or vice versa.
        </p>
        <br>
        <h2>Difference between C and C++?</h2>
        <p>
          <br>
          ->C++ was developed as an extension of C, and both languages have almost the same syntax.<br>
          ->The main difference between C and C++ is that C++ support classes and objects, while C does not.
        </p>
        <br>
        <h2>Simple Syntax</h2>
        <p>
          <br>
          <h2>Example:</h2><br>
        </p>
        <p>
          #include<<iostream>iostream><br>
          using namespace std;
          int main() {
            cout << "Hello World!";
            return 0;
          }</p><br>
          <br>
          <p>
          <h2>Example explained:</h2></p><br>
          <p>
          Line 1: #include <iostream> is a header file library that lets us work with input and output objects, such as cout (used in line 5). Header files add functionality to C++ programs.<br>
          Line 2: using namespace std means that we can use names for objects and variables from the standard library.<br>
          <br>
          <div class="maincontent">
            <p>
            &nbsp&nbspDon't worry if you don't understand how #include <iostream> and using namespace std works. Just think of it as something that (almost) always appears in your program.<br></p></div>
              <p>
          Line 3: Another thing that always appear in a C++ program, is int main(). This is called a function. Any code inside its curly brackets {} will be executed.<br>
          Line 4: cout (pronounced "see-out") is an object used together with the insertion operator (<<) to output/print text. In our example it will output "Hello World".<br>
          </p>
          <div class="maincontent">
            <p>
            &nbsp&nbspNote: Every C++ statement ends with a semicolon ;.<br>
            &nbsp&nbspNote: The body of int main() could also been written as:
            &nbsp&nbspint main () { cout << "Hello World! "; return 0; }<br>
            &nbsp&nbspRemember: The compiler ignores white spaces. However, multiple lines makes the code more readable.<br><br></p></div>
          <p>
          Line 5: return 0 ends the main function.<br>
          Line 6: Do not forget to add the closing curly bracket } to actually end the main function.<br><br></p>
        </p>
      </form><br>
      <div><p>Here some of samples: &nbsp<a href="c++.php">Study it</a></p></div>
    </div>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <ul>
        <li><a href="#"><i class="fas fa-stream"></i>Intro</a></li>
        <li><a href="c++.php"><i class="fas fa-stream"></i>Sample-1</a></li>
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