<?php
    require  "classesandobjects.php";
    class newPaint extends Blueprint
    {
        public function newPaintColor()
        {
                $this->paint = 'Black';
        }
    }
                echo "<hr>";
                $house3 = new newPaint;
                $house3->length = 40;
                $house3->width = 60;
                $house3->paint = 'Aqua Blue';
                $house3->noOfDoors = 6;
                $house3->noOfWindows = 8;
                echo "Total Build up Area for House3: ". $house3->getBuiltUpArea();
                echo "</br>";
                echo "Total Doors for House3:  ". $house3->totalDoors();
                echo "</br>";
                echo "Total Windows for House3: ". $house3->totalWindows();
                echo "</br>";
                echo "Paint for House3: ". $house3->paint();
                echo "</br>";
                echo "New Paint for House3: ". $house3->newPaintColor();
                echo "<hr>";
                class student
                {
                    //public
                    public $name;
                    //protected
                    protected $usn;
                    //Private
                    private $number;
                }
                    class IndividualStudent extends student
                    {
                            public function __construct()
                            {
                                echo "We have created  ".__CLASS__."    and initialized it"."</br>";
                            }
                    }
                    $originalClass = new student;
                    $originalClass->name = "whatever";
                    //$originalClass->usn = 1234;
                    //$originalClass->number = 9898989867;

                    $inheritedClass = new IndividualStudent;
                    $inheritedClass->name = "Inherited";
                    // $inheritedClass->usn  = 5678;
                    // $inheritedClass->number = 87879898;



                

?>