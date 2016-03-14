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
   <p class="title">Finding the equation of a parabola with its x intercepts</p>
   <p>Type in the x coordinates of the x intercepts of your parabola and the coordinates of another point!</p>
   <form method="post" action="intercepts_eq.php">
    <input type="text" class="x1" id="x1" placeholder="X intercept coordinate 1"><br>
    <input type="text" class="x2" id="x2" placeholder="X intercept coordinate 2"><br>
    <input type="text" class="x3" id="x3" placeholder="X coordinate third point"><br>
    <input type="text" class="y1" id="y1" placeholder="Y coordinate third point"><br>
    <input type="submit">
   </form>
   <?php
    $x1 = $_POST['x1'];
    $x2 = $_POST['x2'];
    $x3 = $_POST['x3'];
    $y1 = $_POST['y1'];
    $var1 = ($x3-$x1)*($x3-$x2);
    $a1 = $y1/$var1;
    if ($a1 == 1){
        echo 'y=(x-'.$x1.')(x-'.$x2.')';
    } elseif ($a1 == -1){  
        echo 'y=-(x-'.$x1.')(x-'.$x2.')';
    } else {
        echo 'y='.$a1.'(x-'.$x1.')(x-'.$x2.')';
    }
   ?>
  </div>
 </body>
</html> 
