<html>
    <head><title>Factored Form</title></head>
    <body>
        <h2> Factored(Intercept) Form</h2>
        <p>The factored form of a quadratic, is as it states: The quadratic, factored. Factored form is useful for when solving for the roots of the quadratic. It can also have particular uses when being compared to other functions as you can factor out a particular expression.</p>
        <img width=200 src="http://latex.codecogs.com/png.latex?y%5C,=%5C,a(x-p)(x-q)">

        <p>To find the factored form of a quadratic, simply factor it, using any methods you know.</p>
        <img src="https://www.mathsisfun.com/algebra/images/expand-vs-factor-quadratic.gif">
        <h3>Practice:</h3>
        <h4>Find the factored form of the following quadratic function.</h4>
        <h4>f(x)=-2x<sup>2</sup>+6x+80</h4>
        <Form method="post" action="factored_form.php">
        <input type=text name=answer id=answer placeholder="a(x-p)(x-q)">
            <input type="submit">
        </Form>
        <?php
            $answer = $_POST['answer'];
            if($answer =="2(x+5)(x-8)"){echo"Correct! Well done!";}else{echo"sorry, wrong answer. try again!";};
        ?>
    </body>
</html>