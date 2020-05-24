<!DOCTYPE HTML >
<html>
 <head>
  <meta meta charset="utf-8">
  <title>Таблица умножения</title>
 </head>
 <body>
  <table border="1" width="100%" cellpadding="5">
   <tr>
    <?php
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
                $number = $col*$num;
                echo "<p>$col * $num = $number";
               }
              echo "</th>";
            }
         echo "</tr>";
       }      
      ?>
 </table>
 </body>
</html>