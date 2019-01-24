<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>kok</title>
  </head>
  <body>
<table>
  <?php
  for ($i=0; $i < 10 ; $i++) {
   ?><tr><?php
      for ($j=0; $j < 10 ; $j++) {

        ?><td><?php
        $numbers = rand(0,1);
        if ($numbers == 0 ) {
        echo "O";
        }
        else {
          echo "X" ;
        }

        ?></td><?php
        }
    ?></tr><?php
  }
?>
  </table>
<?php
$sum=0;
for ($s=0; $s < 10; $s++); {
  $iRand=rand(0,1);
  $jRand=rand(0,1);
  $sum = $sum + $numbers[$iRand][$jRand];
}
 ?>
  </body>
  </html>
