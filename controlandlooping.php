<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "utf-8" >
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <tittle>PHP 101 | Control and Looping</tittle>
        <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <p><a href="index.php" style="text-decoration:none" >Go Back</a></p>
    <div class="container">
        <h5>If condition </h5>
        <?php
            $i = 10;
            $j = 20;
            if($i<$j)
            {
                echo $i.' is less than '.$j ;
            }
        ?>
        <hr>
        <h5>If Else condition </h5>
        <?php
            $i = 100;
            $j = 20;
            if($i<$j)
            {
                echo $i.' is less than '.$j ;
            }else{
                echo $j.' is less than '.$i ;
            }
        ?>
        <hr>
        <h5>Nested If Else condition </h5>
        <?php
            $color = 'blue';
            $item = 'blueberries';
            if($color == 'red')
            {
                if($item == 'onion')
                {
                    echo "is a vegetable";
                }
                else if($item =='apple')
                {
                    echo "is a fruit";
                }
            }
            else if($color = 'blue')
            {
                if($item=='brinjal')
                {
                echo "is a vegetable" ;
                }
                else
                {
                    echo "is a fruit";
                }
            }
        ?>
        <hr>
        <h5>Switch Statement</h5>
        <?php
            $day = 'Mon';
            switch($day)
            {
                case 'Monday' : echo "First day of the week";
                break;
                case 'Tuesday' : echo "Second day of the week";
                break; 
                case 'Wednesday' : echo "Third day of the week";
                break; 
                case 'Thursday' : echo "Fourth day of the week";
                break;
                case 'Friday' : echo "Fifth day of the week";
                break; 
                case 'Saturday' : echo "Sixth day of the week";
                break;
                case 'Sunday' : echo "Seventh day of the week";
                break; 
               default: echo "Wrong Day passed";
               break; 
            }
        ?>
         <hr>
        <h5>While loop Statement</h5>
        <?php
            $i =10;
            while($i<=15)
            {
                $i++;
                echo "printing i as ".$i."</br>";
            }
            while($i<=25)
            {
                ++$i;
                echo "printing i as ".$i."</br>";
            }
        ?>
        <hr>
        <h5>Do While loop Statement</h5>
        <?php
            $i =10;
            do
            {
                
                echo "printing i as ".$i."</br>";
                $i++;
            }while($i<10)
            
        ?>
        <hr>
        <h5>For loop Statement</h5>
        <?php
            $fruitArr = ['Apple', 'Orange', 'Banna', 'Watermelon', 'strawberry', 'pineapple', 'papaya'];
            for($i=0;$i<= 10;$i++)
            {
                
                echo "printing i as ".$i."</br>";
            }
            echo "------------------------------------------------------------------------------------------"."</br>";
            for($i=0;$i<count($fruitArr);$i++)
            {
                
                echo $fruitArr[$i]."</br>";
            }
            
        ?>
         <hr>
        <h5>For Each loop Statement</h5> 
       
        <?php
            $fruitArr = ['Apple', 'Orange', 'Banna', 'Watermelon', 'strawberry', 'pineapple', 'papaya'];
            foreach($fruitArr as $fruit) // mostly used for Associative Array
            {
                
                echo $fruit."</br>";
            }
        ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="vendor/bootstrap/js/bootstrap.js"></script>
    </body>
</html>
