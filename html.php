<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link rel="shortcut icon" type="x-icon" href="icon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sample-1</title>
	<link rel="stylesheet" type="text/css" href="htmlstyle.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<style>
  .container
{
  position: relative;
  width: 750px;
  height: 900px;
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
      <li><a href="javaintro.php">Java</a></li>
      <li><a href="pythonintro.php">Python</a></li>
      <li><a href="#" class="active">HTML</a></li>
    </ul>
    <ul>
      <li><a href="Logout.php">Logout</a></li>
    </ul>
  </header>
  <div class="container">
      <form action="html.php" method="post">
        <h2>Sample-1</h2><br>
          <p><<e>!DOCTYPE html><br>
              <<e>html><br>
              <<e>body><br>
              <br>
              <<s>h1>This is heading 1<<s>/h1><br>
              <<s>h2>This is heading 2<<s>/h2><br>
              <<s>h3>This is heading 3<<s>/h3><br>
              <<s>h4>This is heading 4<<s>/h4><br>
              <<s>h5>This is heading 5<<s>/h5><br>
              <<s>h6>This is heading 6<<s>/h6><br>
              <br>
              <<s>/body><br>
              <<s>/html><br>
        </p>
        <br>
        <br>
        <h2>Output</h2>
        <img src="htmlp1.png">
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
        <li><a href="#"><i class="fas fa-stream"></i>Sample-1</a></li>
        <li><a href="html2.php"><i class="fas fa-stream"></i>Sample-2</a></li>
        <li><a href="html3.php"><i class="fas fa-stream"></i>Sample-3</a></li>
        <li><a href="html4.php"><i class="fas fa-stream"></i>Sample-4</a></li>
        <li><a href="html5.php"><i class="fas fa-stream"></i>Sample-5</a></li>
        <li><a href="html6.php"><i class="fas fa-stream"></i>Sample-6</a></li>
      </ul>
    </div>
</body>
</html>