<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" href="parablomatic.css"/>
  <title>Parablomatic</title>
 </head>
 <body>
  <div id="header">
   <a href="parablomatic.html">Parablomatic</a>
  </div>
  <div id="content">
   <p class="title">Finding the equation of a parabola with its vertex</p>
   <p>Type in the coordinates of the vertex and another point to find the equation of your parabola!</p>
   <form method="post" action="intercepts_eq.php">
    <input type="text" class="x1" id="x1" placeholder="X coordinate vertex"><br>
    <input type="text" class="y1" id="y1" placeholder="y coordinate vertex"><br>
    <input type="text" class="x2" id="x2" placeholder="X coordinate second point"><br>
    <input type="text" class="y2" id="y2" placeholder="Y coordinate second point"><br>
    <input type="submit">
   </form>
   <?php
    $x1 = $_POST['x1'];
    $y1 = $_POST['x1'];
    $x2 = $_POST['x2'];
    $y2 = $_POST['y2'];
    $var1 = ($x2-$x1)^2;
    $a1 = ($y1-$y2)/($var1);
    if ($a1 == 1){
        echo 'y=(x-'.$x1.')^2+'.$y1.;
    } elseif ($a1 == -1){  
        echo 'y=-(x-'.$x1.')^2+'.$y1.;
    } else {
        echo 'y='.$a1.'(x-'.$x1.')^2+'.$y1.;
    }
   ?>
  </div>
 </body>
</html> 
