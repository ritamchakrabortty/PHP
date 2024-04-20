<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "utf-8" >
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <tittle>PHP 101 | Datatypes</tittle>
        <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <p><a href="index.php" style="text-decoration:none" >Go Back</a></p>
        <div class="container">
            <h6>Integer</h6>
            <?php

                $i = 123;
                var_dump($i); 
                echo "<br>";
                echo $i;

                $h = 0x1A;
                echo "<br>";
                echo $h;

            ?>
            <hr>
            <h6>Float</h6>
            <?php

                $i = 1.23;
                var_dump($i); 
                echo "<br>";
                echo $i;

                $h = -9.2e3;
                echo "<br>";
                echo $h;

                $j = 3E-9;
                echo "<br>";
                var_dump($j);

            ?>
            <hr>
            <h6>STRING</h6>
            <?php

                $i = "Hello World";
                var_dump($i); 
                echo "<br>";
                echo $i;

            ?>
            <hr>
            <h6>Bool</h6>
            <?php

                $i = false;
                var_dump($i); 
                echo "<br>";
                //echo $i;

            ?>
            <hr>
            <h6>Array</h6>
            <?php

                $FruitArr = ['Apple','Mango','Pine Apple'];
                var_dump($FruitArr); 
                echo "<br>";
                echo $FruitArr[1];
                echo "<br>";

                $ageArr = array(
                    'Upendra' =>25,
                    'Rakesh' =>18,
                    'Dennis' => 50

                );
                var_dump($ageArr); 
                echo "<br>";
                echo $ageArr['Rakesh'];

            ?>
            <hr>
            <h6>Objects | Class</h6>
            <?php

               class student
               {
                    public $student_name = "Dennis";

                    function show_student_name()
                    {
                        return $this->student_name;
                    }
               }
               $st = new student;
               echo "<br>";
               var_dump($st);
               echo "<br>";
            ?>
            <hr>
            <h6>Null|PHP</h6>
            <?php
                $var = NULL;
                var_dump($var);
                echo "<br>";
            ?>
            <hr>
            <h6>Resource</h6>
            <?php
                $fileHandler = fopen("trial.txt","r");
                var_dump($fileHandler);
                echo "<br>"; 
            ?>


        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="vendor/bootstrap/js/bootstrap.js"></script>
    </body>
</html>
