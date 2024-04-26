<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link rel="shortcut icon" type="x-icon" href="icon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sample-5</title>
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
  left: -300px;
  max-width: 600px;
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
  width: 750px;
  height: 1350px;
  background: #1c1c1c;
  border-radius: 10px;
  overflow: hidden;
}
.container p{
  color: #fff;
}
.container form h2{
  text-align: center;
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
.container img{
  width: 500px;
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
      <form action="html5.php" method="post">
        <h2>Sample-5</h2><br>
          <p><<s>!DOCTYPE html><br>
              <<s>html><br>
              <<s>head><br>
              <<s>style><br>
              h1{<br>
                  text-align:center;<br>
              }<br>
              <<s>/style><br>
              <<s>/head><br>
              <<s>body><br>
                  <br>
              <<s>h1>Text Formating<<s>/h1><br>    
              <<s>p>This text is normal.<<s>/p><br>
              <<s>p><<s>b>This text is bold.<<s>/b><<s>/p><br>
              <<s>p><<s>strong>This text is important!<<s>/strong><<s>/p><br>
              <<s>p><<s>i>This text is italic.<<s>/i><<s>/p><br>
              <<s>p><<s>em>This text is emphasized.<<s>/em><<s>/p><br>
              <<s>p><<s>small>This is some smaller text.<<s>/small><<s>/p><br>
              <<s>p>Do not forget to buy <<s>mark>milk<<s>/mark> today.<<s>/p><br>
              <<s>p>My favorite color is <<s>del>blue<<s>/del> red.<<s>/p><br>
              <<s>p>My favorite <<s>ins>color<<s>/ins> is red.<<s>/p><br>
              <<s>p>This is <<s>sub>subscripted<<s>/sub> text.<<s>/p><br>
              <<s>p>This is <<s>sup>superscripted<<s>/sup> text.<<s>/p><br>
              <br>
              <<s>/body><br>
              <<s>/html><br>
        </p>
        <br>
        <br>
        <h2>Output</h2>
        <img src="htmlp5.png">
      </form>
      <div><p>Online Compiler: &nbsp<a href="https://www.tutorialspoint.com/online_html_editor.php">Try It Yourself</a></p></div>
    </div>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <ul>
        <li><a href="htmlintro.php"><i class="fas fa-stream"></i>Intro</a></li>
        <li><a href="html.php"><i class="fas fa-stream"></i>Sample-1</a></li>
        <li><a href="html2.php"><i class="fas fa-stream"></i>Sample-2</a></li>
        <li><a href="html3.php"><i class="fas fa-stream"></i>Sample-3</a></li>
        <li><a href="html4.php"><i class="fas fa-stream"></i>Sample-4</a></li>
        <li><a href="#"><i class="fas fa-stream"></i>Sample-5</a></li>
        <li><a href="html6.php"><i class="fas fa-stream"></i>Sample-6</a></li>
      </ul>
    </div>
</body>
</html>