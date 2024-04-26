<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "utf-8" >
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <tittle>PHP 101 | Operators</tittle>
        <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <p><a href="index.php" style="text-decoration:none" >Go Back</a></p>
        <div class="container">
            <hr>
            <h6>Arithmetic Operators</h6>
            <?php

                $i = 10;
                $j = 20;
                echo '<p>Addition '.$i+$j. '</p>';//addition
                echo '<p>Substraction '.$i-$j. '</p>';//subtraction
                echo '<p>Multiplication '.$i*$j. '</p>';//multiplication
                echo '<p>Division '.$i/$j. '</p>';//division ->Quoient of i is divided by j
                echo '<p>Modulus '.$i%$j. '</p>';//modulus ->remainder of i is divided by j
            ?>
            <hr>
            <h6>Assingnment Operators</h6>
            <?php

                $i = 10;
                $j = 20;
                $i += $j; //$i = $i + $j; -->Add and assignment
                echo '<p>Addition and assignment '.$i. '</p>';
                $i -= $j; //$i = $i - $j; -->Subtract and assignment
                echo '<p>Substraction and assignment '.$i. '</p>';
                $i /= $j; //$i = $i / $j; -->Quotient and assignment
                echo '<p>Division and assignment '.$i. '</p>';
                $i *= $j; //$i = $i * $j; -->Multiplication and assignment
                echo '<p>Multiplication and assignment '.$i. '</p>';
                $i %= $j; //$i = $i % $j; -->Modulus and assignment
                echo '<p>Modulus and assignment '.$i. '</p>';
                $z=15;
                
             ?>
            <hr>
            <h6>Comparison Operators</h6>
            <?php
            $i = 10;
            $j = "10";
            $k = 10;
            $c=2;
            $m=10;
            // ==  --> "Equal "checks if the value are equal
            // === --> "Identical "checks if the value are equal and data types are same or not

            if($i === $j)
            {
                echo "i is equal to j";
                echo "<br/>";
            }
            if($i !== $j)//not identical to 
            {
                echo "i is not equal to j";
                echo " or may be they are of different data types";
                echo "<br/>";
            }
            if($i == $k)
            {
                echo "i is equal to k";
                echo "<br/>";
            }
            if($i != $c)
            {
                echo "i is not equal to c operator type used:'!='";
                echo "<br/>";
            }
            if($i <> $c)
            {
                echo "i is not equal to c operator type used:'<>'";
                echo "<br/>";
            }
            if($c< $i)
            {
                echo "c is less than i";
                echo "<br/>";
            }
            if($i> $c)
            {
                echo "i is greater than c";
                echo "<br/>";
            }
            if($i>= $m)
            {
                echo "i is greater than or equal to m";
                echo "<br/>";
            }
            if($i<= $m)
            {
                echo "i is lesser than or equal to m";
                echo "<br/>";
            }
            ?>
            <hr>
            <h6>Increment and Decrement  Operators</h6>
            <?php
            $i=100;
            $j=100;
            echo "<p>post increment</p>";
            echo $i++;
            echo "<br/>";
            echo $i;
            echo "<br/>";
            echo "<p>pre increment</p>";
            echo ++$j;
            echo "<br/>";
            echo $j;
            echo "<br/>";
            echo "<p>post decrement</p>";
            echo $i--;
            echo "<br/>";
            echo $i;
            echo "<br/>";
            echo "<p>pre decrement</p>";
            echo --$j;
            echo "<br/>";
            echo $j;
            echo "<br/>";
            ?>
             <hr>
            <h6>Logical Operators</h6>
            <?php
                $a =10;
                $b = 10;
                $var = false;
                // and && --> and operator
                // OR || --> or operator
                // ! --> not operator

                if($a == 10 && $b == 10)
                {
                    echo "AND Statement is true";
                    echo "</br>";
                }
                if($a == 10 || $b == 10)
                {
                    echo "OR Statement is true";
                    echo "</br>";
                }
                if(!$var)
                {
                    echo "Not Statement ";
                    echo "</br>";
                }
            ?>
            <hr>
            <h6>String Operators</h6>
            <?php
                $string1 = "Hello world. ";
                $string2 = "How are you?";
                echo $string1.$string2;
                echo "<br>";
                echo $string1.=$string2;
            ?>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="vendor/bootstrap/js/bootstrap.js"></script>
    </body>
</html>
