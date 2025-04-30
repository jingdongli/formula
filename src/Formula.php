<?php

namespace src;

class Formula
{
   public static function run()
   {
       echo "****乘法口诀表******".PHP_EOL;
       for($i=1;$i<=9;$i++)
       {
           for($j=1;$j<=$i;$j++)
           {
               echo "{$j} * {$i} =". $j * $i."      ";
           }
           echo "".PHP_EOL;
       }
   }
}