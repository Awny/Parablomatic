<DOCTYPE html>
<html>
    <head>
        <title>Vertex Form</title>
    </head>
    <body>
        <h2>Vertex Form</h2>
        <p>Vertex form is another useful form to display a quadratic function. As its name implies, it has to do with the parabola's vertex. As discussed previously, the vertex is the turning point in the parabola, where it is reflected. Therefore, vertex form also tells us the line of reflection. It also telss us the maximum/minimum value for the function(<em>k</em>). Vertex form is useful for transformations, as it allows you to simply change any aspect of the parabola's form.</p>
        <p>It is also relevant to note that it is fairly simple to solve for the roots of a quadratic from here.</p>
        <p>vertex form:</p>
        <img src="http://study.com/cimages/multimages/16/vertex2.png">
        <p>Again, <em>a</em> determines the horizontal dialation of the parabola. <em>h</em> and <em>k</em> are the coordinates of the parabola's vertex. (<em>h,k</em>). As you can see, this makes transformations </p>
        
        <h3>Practice:</h3>
        <h4>What is the equation for this parabola in vertex form?</h4>
        <img src="http://craiga.id.au/misc/parabola.png">
        <Form method="post" action="vertex_form.php">
        -1(x-<input type=text name=h id=h placeholder="h">)<sup>2</sup>+<input type="text" name="k" id="k" placeholder="k">
            <input type="submit">
        </Form>
        <?php
            $h = $_POST['h'];
            $k = $_POST['k'];
            if($h == "1")
                {if($k == "2")
                {echo"Correct! Well done!";}
                else{echo"sorry wrong answer. Try again!";}}
            else{echo"sorry wrong answer. Try again!";}
        
          
        ?> 
    </body>
    </html>