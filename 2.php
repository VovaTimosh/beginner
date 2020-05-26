<!DOCTYPE HTML>
<html>
 <head>
  <link rel="stylesheet" href="style.css">
  <title>Тег TABLE</title>
 </head>
 <body>
  <table border="2" width="100%" cellpadding="5">
   <tr>
    <?php
    require_once("functions/color.php");
    require_once("functions/number.php");
     $x = [1,6];
     $y = [5,10];
       for($row=0; $row<2; $row++)
       {
         echo "<tr>";
            for($col=$x[$row]; $col<=$y[$row]; $col++)
            {
             echo "<th>";
               for($num=1; $num<=10; $num++)
               {             
                  number($col);
                  echo " * ";
                  number($num);
                  echo " = ";
                  number($col*$num);          
                  echo "</p>";
               }
              echo "</th>";
            }
         echo "</tr>";
       }      
      ?>
 </table>
 </body>
</html>
