<?php

function color($num)
{
       switch ($num)
         {
             case 1:
                 return "one";
                 break;
             case 2:
                 return "two";
                 break;
             case 3:
                 return "three";
                 break;
             case 4:
                 return "four";
                 break;
             default:
                 return "#";
                 break;
          }
}
      