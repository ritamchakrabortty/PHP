<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "utf-8" >
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <tittle>PHP 101 | Strings(Functionalities)</tittle>
        <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <p><a href="index.php" style="text-decoration:none" >Go Back</a></p>
        <div class="container">
            <hr>
            <h6>strlen()</h6>
            <?php

                $string = "This is a sample sentence for Testing String Functionalities.";
                echo $string;
                echo "<br />";
                echo strlen($string);
            ?>
            <hr>
            <h6>str_word_count()</h6>
            <?php

                $string = "This is a sample sentence for Testing String Functionalities.";
                echo "<br />";
                echo str_word_count($string);
            ?>
            <hr>
            <h6>str_replace()</h6>
            <?php

                $string = "This is a sample sentence for Testing String Functionalities.";
                echo "<br />";
                echo str_replace('sample','simple',$string);
            ?>
            <hr>
            <h6>strrev()</h6>
            <?php

                $string = "This is a sample sentence for Testing String Functionalities.";
                echo "<br />";
                echo strrev($string);
            ?>
             <hr>
            <h6>strpos()</h6>
            <?php

                $string = "This is a sample sentence for Testing String Functionalities.";
                echo "<br />";
                echo strpos($string,"sentence");
                
            ?>
             <hr>
            <h6>strtoupper()</h6>
            <?php

                $string = "This is a sample sentence for Testing String Functionalities.";
                echo "<br />";
                echo strtoupper($string);
                
            ?>

        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="vendor/bootstrap/js/bootstrap.js"></script>
    </body>
</html>
