<DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="parablomatic.css">
        <title>Finding Roots</title>
    </head>
    <body>
     <div id="header">
      <a href="parablomatic.html">Parablomatic</a>     
     </div>    
     <div id="content">
      <p class="title">Finding The Roots of a Quadratic</p>
      <p> The "roots" of a quadratic are the points in which it intersects with the x-axis. It is the value of "x" when "y" is equal to 0.</p>
      <p> There are a number of ways to find the roots of a quadratic. We will discuss some of them here.</p>
      <p class="title"> The Quadratic Formula</p>
      <p> The quadratic formula is arguably the simplest, most straight-forward way to find the roots of a quadratic. The quadratic formula is based on the <a href="standard_from.html">standard form</a> of a quadratic. Simply substitute in the a, b, and c values of the quadratic in standard form, into the quadratic formula. Solving it will result in two values for "x" when "y" is equal to 0.</p>
      <p class="title"> f(x) = ax<sup>2</sup> + bx + c</h2>
      <img width= 300 src="http://www.statisticslectures.com/images/quadeq1.gif"/>
      <p class="title">Solving Manually</p>
      <p> It is also possible to manually solve for the roots of the quadratics. To do this, first, set the value of y or f(x) equal to 0.(this sets the value of the quadratic equal to 0). Now solve for x. To solve, you must factor the quadratic. Completing the square is one method of manually solving for the roots.It is easy to solve for the roots when using <a href="...">vertex form</a> or <a href="Factored_form.html">factored form</a>.</p>
      <p class="title">Quadratic Root Finder</p>
      <p>Finally, it possible to find the roots of a quadratic through tools like a calculator or the one we have created below. These tools are created to make finding roots as simple as possible. Just input the quadratic function you want to find the roots of, and hit submit!</p>
        <form method = "post" action="Root_finder.php">
        <table>
            <tr>
                <td><input type=text name="a" id="a" placeholder=a>x<sup>2</sup> +</td>
                <td><input type=text name="b" id="b" placeholder=b>x +</td>
                <td><input type=text name="c" id="c" placeholder=c></td>
            </tr>
        </table>
            <input type=submit>
        </form>
    
        <?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$x1 = (-$b + sqrt($b*$b - (4*$a*$c))) / (2 * $a);
$x2 = (-$b - sqrt($b*$b - (4*$a*$c))) / (2 * $a);
        
echo"The roots are: ";
echo substr($x1,0,5);
        echo ", ";
echo substr($x2,0,6);
        
        ?>
     </div>    
    </body>
</html>
