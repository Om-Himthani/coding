<?php
$array=array("Om","Himthani","Hi","How","are","you");
echo "<ol>";
foreach($array as $names){
       $pop=array_pop($array);
       echo "<li>$names</li>";

}
echo "</ol>";
$count=count($array);
echo $count;
print_r($array);


?>


