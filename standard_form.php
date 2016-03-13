<DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="parablomatic.css"/>
        <title>Standard Form</title>
    </head>
    <body>
     <div id="header">
      <a href="parablomatic.html">Parablomatic</a>     
     </div>
     <div id="content">
        <p class="title"> Standard Form</p>
       <p> f(x) = ax<sup>2</sup> + bx + c</p>
        <p> "a" cannot be 0, because of it was this would not be a quadratic function, rather a linear function. (bx + c)</p>
        <p>This is the standard form of a quadratic function. Using standard form has two main benifits. First, it clearly shows the y-intercept. And second, it is great for use in the quadratic equation as it has values a, b, c. <br /><a href="root_finder.html"><strong> See Finding Roots of a Quadratic here.</strong></a></p>
        <p>c in this equation is the y-intercept. It is the point where the Parabola intersects with the y-axis. Changing the y-intecept will translate the graph vertically.</p>
        <p> Insert the y-intercept of this graph into thre quadratic function</p>
        <img src="http://craiga.id.au/misc/parabola.png">
<form method = "post" action="standard_form.php">
        <table>
            <tr>
                <td>ax<sup>2</sup> +</td>
                <td>bx +</td>
                <td><input type=text name="c" id="c" placeholder=c></td>
            </tr>
        </table>
            <input type=submit>
        </form>
        <?php 
            $c = $_POST['c'];
            echo "ax <sup>2</sup> + bx +";
            echo ($c);
            echo "<br/>";
            
            if($c ==1){echo"Excellent. Go on";}else{echo"sorry wrong answer, try again";};
    ?>
      <p>The "a" value corresponds to the horizontal dialation of the parabola. If the "a" value is positive, the parabola opens upwards, uf it is negative, the parabola opens downwards.</p>
        <p> The "b" value affect the placement of the vertex</p>
             <a href="vertex_form.html">Vertex and vertex form</a>
             <a href="Factored_form.html">X intercepts and factored form</a>
             <a href="root_finder.html">Finding the x intercepts</a>
             <a href="domain.html">Domain and range</a>
             <a href="find_equations.html">Finding the equation of parabolas</a>
         </div>
        </body>
    </html>
