<?php
for($x=1;$x<=100;$x++){
    if(($x%3==0) and ($x%5==0)){
        echo "<br><h1>Fizz Buzz</h1>";
    }
    elseif($x%5==0){
        echo "<br><h1>Buzz</h1>";
    }
    elseif($x%3==0){
        echo "<br><h1>Fizz</h1>";
    }
    else{
        echo "<br><h1>$x</h1>";
    }

}

?>