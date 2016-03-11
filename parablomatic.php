<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="parabolamatic.css"/>
        <title>Parabolomatic</title>
    </head>
    <body>
     <div id="head">   
      <h1>Parabolamatic</h1>
      <a href="">about</a>
      <a href="">Parabola finder</a>
      <a href="">Line finder</a>
     </div>
     <div id="content">
      <h3>Parabola Finder</h3>
        <form  attribute=POST method = POST>
        <table>
            <tr>
                <td>Point #</td>
                <td align=center>1</td>
                <td align=center>2</td>
                <td align=center>3</td>
            </tr>
            <tr>
                <td>X</td>
                <td><input type = text name ="x"  placeholder =x></td>
                <td><input type = text name ="x2" placeholder =x></td>
                <td><input type = text name ="x3" placeholder =x></td>
            </tr>
            <tr>
                <td>Y</td>
                <td><input type = text name ="y" placeholder =y></td>
                <td><input type = text name ="y2" placeholder =y></td>
                <td><input type = text name ="y3" placeholder =y></td>
            </tr>
        </table>
            <input type = submit >
        </form>
        *image of parabola from the assignment!
        
    <?php
        $x1 = $_POST['x'];
        $x2 = $_POST['x2'];
        $x3 = $_POST['x3'];
        
        $y1 = $_POST['y'];
        $y2 = $_POST['y2'];
        $y3 = $_POST['y3'];
        
        
    ?>    
     </div>    
    </body>
</html>
