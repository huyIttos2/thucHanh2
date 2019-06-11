<?php
include  "src/CircleComparator.php";
$circleOne = new Circles("circleOne" , 3);
$circleTwo = new Circles("circleTwo",4);
$circleComparator = new CircleComparator();
var_dump($circleComparator -> compare($circleOne,$circleTwo));