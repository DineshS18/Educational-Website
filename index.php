<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Educational Website</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header id="header">
  <a href="#" class="logo">Website for Education</a>
  </header>
  <ul class="navigation">
      <li><a href="#" class="active">Home</a></li>
      <li><a href="About.php">About</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="Register.php">Register</a></li>
    </ul>
 <section>
  	<h2 id="text"><span>It's time to learn some new thing</span><br>Coding</h2>
  	<img src="bird1.png" id="bird1">
  	<img src="bird2.png" id="bird2">
  	<img src="forest.png" id="forest">
  	<a href="login.php" id="btn">Explore</a>
  	<img src="rocks.png" id="rocks">
  	<img src="water.png" id="water">
  </section>
  <div class="sec">
  	<h2>Educational Website</h2>
    <p>There are numerous websites that provide resources for learning how to code. Here are some popular websites provide codes like C, C++, Java, etc..., but no one gives a proper explaining about the coding. Like, W3Schools, JavaPoint, Codecademy of popular websites gives a proper code but no good explanation.</p>
  	<p>That's why am provide in this project, mainly focus on understanding of the learners who feel better to learn with the help of audio and video not only with comment lines.This project explains basic coding's of C, C++, Java, Python, Html with comment lines as well as audio and video.The coding gives a glimpse of major concepts of OOP’s which will be of more use to students who prepare for their exams in last minute.</p>
  </div>
  <script>
  	let text = document.getElementById('text');
  	let bird1 = document.getElementById('bird1');
  	let bird2 = document.getElementById('bird2');
  	let btn = document.getElementById('btn');
  	let rocks = document.getElementById('rocks');
  	let forest = document.getElementById('forest');
  	let water = document.getElementById('water');
  	let header = document.getElementById('header');
  	window.addEventListener('scroll',function(){
  		let value = window.scrollY;
  		text.style.top = 50 + value * -0.5 + '%';
  		bird1.style.top = value * -1.5 + 'px';
  		bird1.style.left = value * 2 + 'px';
  		bird2.style.top = value * -1.5 + 'px';
  		bird2.style.left = value * -5 + 'px';
  		btn.style.marginTop = value * 1.5 + 'px';
  		rocks.style.top = value * -0.12 + 'px';
  		forest.style.top = value * 0.25 + 'px';
  		header.style.top = value * 0.5 + 'px';
  	})
  </script>
</body>
</html>