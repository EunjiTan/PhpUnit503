<html>
<head>




<style>
  body {
    background-image:url("050.jpg");
  
  }
</style>
</head>  

<body>
<?php
    $a = 600;
    $b = 30;
    $c = 5;
    $x = $a / $b * $c;
    echo "<p>$x<p>";
    //is also same as
    $x = (($a / $b ) * $c); // left to right
    echo "<p>$x</p>";

    $x = $y = $z = $c;
    echo "<p>$x</p>";
    // is also same as
    ($x = ($y = ($z = $c))); // right to left
    echo "<p>$x</p>";


?>



<?php
      echo "<br>";
      echo "<h3>Post and Pre Increments and Decrements</h3>";

    $x = 10;
    //post increment
    echo "<p>".$x++."</p>"; //10
    //pre increment
    echo "<p>".++$x."</p>"; //12

    $y = 20;
    //post decrement
    echo "<p>". $y--."</p>"; //20
    //pre decrement
    echo "<p>".--$y."</p>"; //18

    ?>

    <?php
    echo "<br>";
    echo "<h3>Comparison Operator</h3>";
    $a = 10;
    $b = 20;
    
    echo "<br>";
    echo "<br>";
    $x = $a > $b ? "\$a is larger": "\$b is larger";
    echo $x;
    ?>

    <?php
          echo "<br>";
          echo "<h3> Bitwise Operator </h3>";

    $a = 135; $b = 45;
    $c = $a = &$b;
    echo "<p>$c</p>";
    $c = $a | $b;
    echo "<p>$c</p>";
    $c = $a ^ $b;
    echo "<p>$c</p>";
    $c = ~$b;
    echo "<p>$c</p>";
    $c = $b << 2;
    echo "<p>$c</p>";
    $c = $a >> 2;
    echo "<p>$c</p>";

  ?>

  <?php

echo "<br>";
echo "<h3> PHP Control Structures: Conditional Statements </h3>";


      $a = 50; $b = 80;
      //if statement
      if($a < $b) {
        echo "<p>\$a is less than \$b</p>";
      }
      //if...else statement
      if($a > $b) {
        echo "<p>\$a is greater than \$b</p>";
      } else {
        echo "<p>\$a is less than or equal to \$b</p>";
      }
      //if...elseif...else
      if($a < $b) {
        echo "<p>\$a is greater than \$b</p>";
      }
      elseif($a < $b) {
        echo "<p>\$a is less than \$b</p>";
      }
      else {
        echo "<p>\$a is equal to \$b</p>";
      }

?>

<?php 

echo "<br>";
echo "<h3> Nested if...else </h3>";


     $score = 86;
     if($score > 80) {
      if ($score < 91) {
        echo "Your score is between 80 to 91";
      } else {
        echo "Your score is higher than 90";
      }
     } else {
      echo "Your score is lower than 81";
     }


?>

<?php

echo "<br>";
echo "<h3> Conditional Statements using Compound expression using Logical Operators  </h3>";

    $score = 86;
    if($score > 80 && $score<91) {
      echo "Your score is between 80 to 91";
    } else if($score > 90) {
      echo "Your score is higher than 90";
    } else{
      echo "Your score is lower than 81";
    }

?>






<?php


echo "<br>";
echo "<h3> Switch Statements </h3>";
    $month = 2;
    switch($month){
      case 1:
        echo "January"; break;
      case 2:
        echo "February"; break;
      case 3:
        echo "March"; break;
      case 4:
        echo "and so on up to 12"; break;
        default:
        echo "Invalid"; break;
    }
?>


<?php

echo "<br>";
echo "<h3> Looping Statements </h3>";

$x = 10;
while($x>0) {
  echo $x--." ";
}
echo "<br/r>";

$y = 20;
do{
  echo $y++. " ";
} while($y<21);
echo "<br/>";

$z=5;
for($i=$z;$i>0;$i--) {
  echo $i." ";
}
?>

</body>
</html>