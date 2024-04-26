<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link rel="shortcut icon" type="x-icon" href="icon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Intro</title>
	<link rel="stylesheet" type="text/css" href="htmlstyle.css">
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
  height: 1740px;
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
      <li><a href="pythonintro.php">Python</a></li>
      <li><a href="#" class="active">HTML</a></li>
    </ul>
    <ul>
      <li><a href="Logout.php">Logout</a></li>
    </ul>
  </header>
  <div class="container">
      <form action="htmlintro.php" method="post">
        <div class="intro">
          <h2>HTML Intro:</h2><br>
        </div>
        <br>
        <p>->HTML is the standard markup language for creating Web pages.</p><br>
        <h2>What is HTML?</h2>
          <p>
            <br>
              ->HTML stands for Hyper Text Markup Language.<br>
              ->HTML is the standard markup language for creating Web pages<br>
              ->HTML describes the structure of a Web page<br>
              ->HTML consists of a series of elements<br>
              ->HTML elements tell the browser how to display the content<br>
              ->HTML elements label pieces of content such as "this is a heading", "this is a paragraph", "this is a link", etc.<br>
        </p>
        <br>
        <h2>What is an HTML Element?</h2>
        <p>
          <br>
          ->An HTML element is defined by a start tag, some content, and an end tag:<br>
          <<e>tagname> Content goes here... <<e>/tagname><br><br>
          The HTML element is everything from the start tag to the end tag:<br>
          <<e>h1>My First Heading<<e>/h1><br>
          <<e>p>My first paragraph.<<e>/p><br>
        </p>
        <br>
        <img src="html1.png">
        <br>
        <br>
        <div class="maincontent">
            <p>
            &nbsp&nbspNote: Java is case-sensitive: "MyClass" and "myclass" has different meaning.</p></div><br><br>
        <h2>Simple Syntax</h2>
        <p>
          <br>
          <h2>Example:</h2><br>
        </p>
        <p>
          <<e>!DOCTYPE html><br>
          <<e>html><br>
          <<e>head><br>
          <<e>title>Page Title<<e>/title><br>
          <<e>/head><br>
          <<e>body><br>
          <<e>h1>My First Heading<<e>/h1><br>
          <<e>p>My first paragraph.<<e>/p><br>
          <<e>/body><br>
          <<e>/html></p><br>
          <br>
          <p>
          <h2>Example explained:</h2></p><br>
          <p>
          ->The <<e>!DOCTYPE html> declaration defines that this document is an HTML5 document<br>
          ->The <<e>html> element is the root element of an HTML page<br>
          ->The <<e>head> element contains meta information about the HTML page<br>
          ->The <<e>title> element specifies a title for the HTML page (which is shown in the browser's title bar or in the page's tab)<br>
          ->The <<e>body> element defines the document's body, and is a container for all the visible contents, such as headings, paragraphs, images, hyperlinks, tables, lists, etc.<br>
          ->The <<e>h1> element defines a large heading<br>
          ->The <<e>p> element defines a paragraph</p><br>
      </form><br>
      <div><p>Here some of samples: &nbsp<a href="html.php">Study it</a></p></div>
    </div>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <ul>
        <li><a href="#"><i class="fas fa-stream"></i>Intro</a></li>
        <li><a href="html.php"><i class="fas fa-stream"></i>Sample-1</a></li>
        <li><a href="html2.php"><i class="fas fa-stream"></i>Sample-2</a></li>
        <li><a href="html3.php"><i class="fas fa-stream"></i>Sample-3</a></li>
        <li><a href="html4.php"><i class="fas fa-stream"></i>Sample-4</a></li>
        <li><a href="html5.php"><i class="fas fa-stream"></i>Sample-5</a></li>
        <li><a href="html6.php"><i class="fas fa-stream"></i>Sample-6</a></li>
      </ul>
    </div>
</body>
</html>