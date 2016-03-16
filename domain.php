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
   <p class="title">The domain and range of quadratic functions</p>
   <p>Normal quadratic functions without any restrictions on the x axis will always have
   a domain of "x such that x is an element of the real numbers", because unlike rational, 
   logarithmic or square root functions, there are no x values in a quadratic that could 
   provide an undefined or "impossible" value.</p>
   <p>On the other hand, because the vertex in a quadratic represents the highest/lowest
   y value that the quadratic will ever have, the range of the quadratic will always be
   "y such that y is greater/less than or equal to *y coordinate of the vertex*". Whether
   the range includes a "greater than or equal to" or a "less than or equal to" depends
   whether the quadratic opens upwards or downwards (if the "a" value on the equation is
   positive or negative). In those cases where the parabola is going down, the range will
   be "less than or equal to" as in those cases the vertex represents the MAXIMUM value
   of the parabola. Meanwhile, in the cases where the parabola is going up, the range
   will be "greater than or equal to" as in those cases the vertex represents the MINIMUM
   value of the parabola.</p>
   <p class="title">Let's practice!</p>
   <p>f(x)=5(x+5)<sup>2</sup>-3</p>
   <p>Find the domain and range:</p>
   <form method="post" action="domain.php">
    <input type="text" name="domain" id="domain" placeholder="x such that..."> <br>
    <input type="text" name="range" id="range" placeholder="y such that..."> <br>
    <input type="submit">
   </form>
   <span id=php><?php
    $domain = $_POST['domain'];
    $range = $_POST['range'];
    
    if($domain == "x such that x is an element of the real numbers") {
        echo "Correct domain! Well done!";
    } else {
        echo "Incorrect! Try again!";
    }
    if($range == "y such that y is greater than or equal to negative three") {
        echo "Correct range! Well done!";
    } else { 
        echo "Incorrect! Try again!";
    }          
   ?>
      </span>
   <br />
   <a href="standard_from.html">Standard form</a>
   <a href="vertex_form.html">Vertex and vertex form</a>
   <a href="Factored_form.html">X intercepts and factored form</a>
   <a href="root_finder.html">Finding the x intercepts</a>
   <a href="finding_equations.html">Finding the equation of parabolas</a>
  </div>   
 </body>
</html>
