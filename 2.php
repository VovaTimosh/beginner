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
    require_once("functions/multiple.php");
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
                  echo "<span class = ".color($col).">".$col."</span>";
                  echo " * ";
                  echo "<span class = ".color($num).">".$num."</span>";
                  echo " = ";
                  multiple($col,$num);          
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
