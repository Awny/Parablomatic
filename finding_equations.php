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
   <p class="title">Finding the equations of parabolas</p>
   <p>When trying to find the equation of a parabola we must try to find its most important
   points and then come up with an equation using these. For example if you know where the
   x intercepts are you can use the factored form equation. If you know where the vertex
   is then you can use the vertex form equation.</p>
   <p>For example:</p>
   <img src="http://mathinsight.org/media/image/image/graph_x_squared_minus_4.png"
   style="width:500px;height:250px;"/>
   <p>Here we can see that the x intercepts are 2 and -2 so we can say that the equation
   for this parabola is y=a(x-2)(x--2) or y=a(x-2)(x+2). Now to find a, all we need to do
   is substitute the y and x with another set of points in the parabola and then solve for
   a. We will use the ones (0, -4).</p>
   <p>-4=a(0-2)(0+2)</p>
   <p>-4=a(-4)</p>
   <p>-4/-4=a</p>
   <p>a=1</p>
   <p>Thus the equation for this parabola is y=(x-2)(x+2)</p>
   <p class="title">Let's practice!</p>
   <p>Find the equation of the parabola below:</p>
   <img src="http://www.montereyinstitute.org/courses/DevelopmentalMath/COURSE_TEXT2_RESOURCE/U17_L2_T3_text_final_5_files/image012.png" 
   style="width:250px;height:500px;"/>
   <form method="post" action="finding_equations.php">
    <input type="text" class="answer" id="answer" placeholder="y=...">
    <input type="submit">
   </form>
   <span id=php><?php
    $answer=$_POST['answer'];
    if ($answer == "y=(x+1)(x-3)") {
        echo "Correct! Well done!";
    } elseif ($answer == "y=(x-3)(x+1)"){
        echo "Correct! Well done!";
    } elseif ($answer == "y=(x-1)^2-4"){
        echo "Correct! Well done!";
    } else {
        echo "Incorrect! Try again!";
    }
   ?><span id=php>
   <br />
   <p>You can also try out the following equation finders!</p>
   <a href="intercepts_eq.html">Finding equations with x intercepts</a>
   <a href="vertex_eq.html">Finding equations with vertex</a>
   <p>Check out the other lessons!</p>
   <a href="standard_from.html">Standard form</a>
   <a href="vertex_form.html">Vertex and vertex form</a>
   <a href="Factored_form.html">X intercepts and factored form</a>
   <a href="root_finder.html">Finding the x intercepts</a>
   <a href="domain.html">Domain and range</a>
  </div>   
 </body>
</html>
