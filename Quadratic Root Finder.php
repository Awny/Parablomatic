<DOCTYPE html>
<html>
    <head>
        <title>Parablomatic</title>
    </head>
    <body>
        <h3>Quadratic Root Finder</h3>
        <form method = "post">
        <table>
            <tr>
                <td><input type=text name="a" id="a" placeholder=a>x^2 +</td>
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

if (is_numeric($x1)){echo round("$x1", 3);
        echo", ";
        echo round("$x2", 3);} else{echo "non-real roots";}

if (is_numeric($x1))  
{  
echo "var_name1 is Numeric.<br>" ;  
}  
else  
{  
echo "var_name1 is not Numeric. <br>" ;  
}  
        
        ?>
    </body>
</html>