<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "utf-8" >
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <tittle>PHP 101| Classes and Objects</tittle>
        <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <p><a href="index.php" style="text-decoration:none" >Go Back</a></p>
    <div class="container">
        <?php
            class Blueprint
            {
                public $length = 0;
                public $width = 0;
                public $paint = ' ';
                public $noOfWindows = 0;
                public $noOfDoors = 0;
                
               /* public function __construct()//Magic method
                {

                }*/
                public function getBuiltUpArea()//method
                {
                    return ($this->length * $this->width);
                }
                public function totalDoors()
                {
                    return $this->noOfDoors;
                }
                public function totalWindows()
                {
                    return $this->noOfWindows;

                }
                public function paint()
                {
                    return $this->paint;
                }
                
            }
            $house1 = new Blueprint;
                
                $house1->length = 30;
                $house1->width = 40;
                $house1->paint = 'Orange and Green';
                $house1->noOfDoors = 3;
                $house1->noOfWindows = 5;
                echo "Total Build up Area for House1: ". $house1->getBuiltUpArea();
                echo "</br>";
                echo "Total Doors for House1:  ". $house1->totalDoors();
                echo "</br>";
                echo "Total Windows for House1: ". $house1->totalWindows();
                echo "</br>";
                echo "Paint for House1: ". $house1->paint();
                echo "</br>";
                echo "<hr>";
                $house2 = new Blueprint;
                $house2->length = 40;
                $house2->width = 60;
                $house2->paint = 'Aqua Blue';
                $house2->noOfDoors = 6;
                $house2->noOfWindows = 8;
                echo "Total Build up Area for House2: ". $house2->getBuiltUpArea();
                echo "</br>";
                echo "Total Doors for House2:  ". $house2->totalDoors();
                echo "</br>";
                echo "Total Windows for House2: ". $house2->totalWindows();
                echo "</br>";
                echo "Paint for House2: ". $house2->paint();
                echo "</br>";
                echo "</br>";


        ?>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="vendor/bootstrap/js/bootstrap.js"></script>
    </body>
</html>