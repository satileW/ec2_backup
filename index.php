<?php 
require_once __DIR__ . '/vendor/autoload.php';
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>welcome!!!</title>

<style type="text/css">
@media (orientation:landscape){
.frame1 {
}
}
</style>
</head>
<body>
<nav class="menu">Here is Mia Wang's Company</nav>
<h1>Home</h1>
<ol>coming ~<a href="news.html">new!!</a></ol>
<ol>next coming: <a href="about.html">about</a></ol>
<ol>third coming: <a href="productSection.html">products</a></ol>
<ol>forth coming: <a href="login.html">login in</a></ol>
<ol>firth coming: <a href="userSection.html">User section</a></ol>
<ol>last coming: <a href="contacts.php">my contacts</a></ol>

<article class="product sales">Enjoy our products~</article>
<iframe id="iframe" src="./ghost.html" width="300" height="300">
</iframe>
 <script>
      var canvas = document.getElementById('mycanvas');
      var context = canvas.getContext('2d');

      context.beginPath();
      context.moveTo(100, 150);
      context.lineTo(450, 50);
      context.lineWidth = 10;

      // set line color
      context.strokeStyle = '#ff0000';
      context.stroke();
    </script>
<footer class="tx">Thank List: my professor/ my teammates / my goodfriends
</footer>

</body>

</html>
