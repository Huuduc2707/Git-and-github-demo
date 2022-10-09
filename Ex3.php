<?php 
$array = array(5,25,13,8,45,6,11);

//Find the maximum and minimum number
function findMinMax(){
    global $array;
    $max = $array[0];
    $min = $array[0];
    for($i = 1; $i<count($array); $i++){
        if($max < $array[$i]) $max = $array[$i];
        if($min > $array[$i]) $min = $array[$i];
    }
    echo "<h3>The largest number is ". $max . "</h3>";
    echo "<h3>The smallest number is ". $min . "</h3>";
}

//Sorting array from smallest to largest
function ascendingSorting(){
    global $array;
    for($i = 0; $i< count($array); $i++){
        for($j = $i + 1; $j< count($array); $j++){
            if($array[$i]>$array[$j]){
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    echo "<h3>Sorting array from smallest to largest: ";
    for($i = 0; $i<count($array);$i++){
        if($i !== count($array)-1) echo $array[$i]. ", ";
        else echo $array[$i];
    }
    echo "</h3>";
}

//Sorting array from largest to smallest
function descendingSorting(){
    global $array;
    for($i = 0; $i< count($array); $i++){
        for($j = $i + 1; $j< count($array); $j++){
            if($array[$i]<$array[$j]){
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    echo "<h3>Sorting array from largest to smallest: ";
    for($i = 0; $i<count($array);$i++){
        if($i !== count($array)-1) echo $array[$i]. ", ";
        else echo $array[$i];
    }
    echo "</h3>";
}

//Print result to the webpage
function result(){
    echo "<h2>Using PHP (the given array is [5,25,13,8,45,6,11]):</h2>";
    findMinMax();
    ascendingSorting();
    descendingSorting();
}
?>