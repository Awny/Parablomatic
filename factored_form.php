<html>
 <head>
  <link rel="stylesheet" href="parablomatic.css"/>     
  <title>Factored Form</title>
 </head>
 <body>
  <div id="header">
   <a href="parablomatic.html">Parablomatic</a>      
  </div>
  <div id="content">
   <p class="title"> Factored(Intercept) Form</p>
   <p>The factored form of a quadratic, is as it states: The quadratic, factored. Factored form is useful for when solving for the roots of the quadratic. It can also have particular uses when being compared to other functions as you can factor out a particular expression.</p>
   <img width=200 src="http://latex.codecogs.com/png.latex?y%5C,=%5C,a(x-p)(x-q)">
   <p>To find the factored form of a quadratic, simply factor it, using any methods you know.</p>
   <img src="https://www.mathsisfun.com/algebra/images/expand-vs-factor-quadratic.gif">
   <p class="title">Practice:</p>
   <p>Find the factored form of the following quadratic function.</p>
   <p class="title">f(x)=-2x<sup>2</sup>+6x+80</p>
   <Form method="post" action="factored_form.php">
   <input type=text name=answer id=answer placeholder="a(x-p)(x-q)">
   <input type="submit">
        </Form>
        <?php
            $answer = $_POST['answer'];
            if($answer =="2(x+5)(x-8)"){
                echo"Correct! Well done!";
            } else {
                echo"sorry, wrong answer. try again!";
            };
        ?>
         <a href="standard_from.html">Standard form</a>
         <a href="vertex_form.html">Vertex and vertex form</a>
         <a href="root_finder.html">Finding the x intercepts</a>
         <a href="domain.html">Domain and range</a>
         <a href="find_equations.html">Finding the equation of parabolas</a>  
     </div>    
    </body>
</html>
