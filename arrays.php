<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "utf-8" >
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <tittle>PHP 101 |Array Fundamentals</tittle>
        <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <p><a href="index.php" style="text-decoration:none" >Go Back</a></p>
    <div class="container">
        <?php
            //1st way of declaring an empty array
            $array = [];
            echo gettype($array);
            echo "</br>";
            echo var_dump($array);
            echo "</br>";
            //2nd way of declaring an empty array
            $array1 = array();
            echo var_dump($array1);
            echo "</br>";
            //Array with values step1
            $array1val = ['Dog', 'Cat','Cow'];
            echo var_dump($array1val);
            echo "</br>";
            echo gettype($array1val);
            echo "</br>";
            //Array with values step2
            $array2val = array('Dog2', 'Cat2','Cow2');
            echo var_dump($array2val);
            echo "</br>";

        ?>
        <hr>
        <h5> @2nd Part of the ARRAYS </h5>
        <?php
            $array =  ['Dog', 'Cat','Cow'];
            echo count($array);
            echo "</br>";
            echo ' Index 0: '.$array[0].' Index 1: '.$array[1].' Index 2: '.$array[2];
            echo "</br>";
            for($i=0;$i<count($array);$i++)
            {
                echo $array[$i]."</br> ";
            }

        ?>
          <hr>
        <h5> @Associative ARRAYS </h5>
        <?php
                $associateArr = ['sidh'=>'85', 'kav'=>'88', 'tins'=>'99'];
                echo ' Index 0: '.$associateArr['sidh'].' Index 1: '.$associateArr['kav'].' Index 2: '.$associateArr['tins'];
                echo "</br>";
                echo "<hr>";
                foreach($associateArr as $key=>$Value)
                {
                    echo 'For '.$key.' age is '.$Value.'</br>';
                }
        ?>
         <hr>
        <h5> @Multidimensional ARRAYS </h5>
        <?php
            //Multidimensional Arrays
            for($i=0;$i<10;$i++)
            {
                for($j=0;$j<$i;$j++)
                {
                    echo "*";
                }
                echo "</br>";
            }
            echo "</br>";
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="vendor/bootstrap/js/bootstrap.js"></script>
    </body>
</html>