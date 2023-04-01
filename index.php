
    <!-- first task -->
    
    <?php
    echo nl2br("trying line break \n this should be under the first sentence");
    ?>
    <!--  -->

    <!-- second task -->
    <?php

echo("<br> ------------------- <br>");
$newString = "this is a new string";
echo str_repeat($newString, 2);
// repeats string
echo "<br>";
echo str_replace("new","changed",$newString);
echo "<br>";
print_r(str_split($newString, 2));
?>
    
    <!--  -->
<!-- third task -->
<?php
// echo("<br> ------------------- <br>");
// foreach( $_SERVER as $key => $value){
//     print("$key => $value <br>");
// }
?>

<!--  -->

<!-- fourth task -->
<?php
echo("<br> ------------------- <br>");
$newArr = [12,45,10,25];

echo "<br> Sum: ". array_sum($newArr);
echo "<br> average: ". array_sum($newArr) / count($newArr);
echo "<br> <br>";
rsort($newArr);
foreach($newArr as $value){
    echo "$value <br>";
}

?>



<!--  -->

<!-- fifth task -->
<?php
echo("<br> ------------------- <br>");
$fifthTaskArr = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
echo " <br> ascending by value <br>";
asort($fifthTaskArr);
foreach($fifthTaskArr as $key => $value){
    print("$key => $value <br>");
}
echo "<br>ascending by key <br>";
ksort($fifthTaskArr);
foreach($fifthTaskArr as $key => $value){
    print("$key => $value <br>");
}
echo "<br>descending by value <br>";
arsort($fifthTaskArr);
foreach($fifthTaskArr as $key => $value){
    print("$key => $value <br>");
}
echo " <br> descending by value <br>";
krsort($fifthTaskArr);
foreach($fifthTaskArr as $key => $value){
    print("$key => $value <br>");
}
?>
<!--  -->