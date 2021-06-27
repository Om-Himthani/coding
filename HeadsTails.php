<?php
$head=0;
$tails=0;
for($x=1;$x<=100;$x++){

    $randnum=rand(1,2);

    if($randnum==1){
$head++;
        //echo "Heads I win";


    }

    else{
    $tails++;
        //echo "Tails you win";
//echo "<h1>$x<br></h1>";
    }
}
if($tails>$head){
    echo "<center><h1>Tails I win</h1></center>";
}
elseif($head>$tails){
    echo "<center><h1>Heads I win</h1></center>";
}
else{
    echo "<center><h1>Draw</h1></center>";
}
?>