<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;

}
table{
border:1px solid black;
border-spacing:0;
}
td{
    padding:30px;
    border:1px solid black;

}
.bgcolor{
    background:black;
}
</style>
</head>
<body>
  
    <form method="POST">
    <br><input type="text" name="input1" id="">
    <input type="submit" value="submit" name="submit">
    </form>
    <table>
    <br><?php
if(isset($_POST['submit'])){
$data=$_POST['input1'];
for($row=1; $row<=$data; $row++){
echo "<tr>";
for($col=1;$col<=$data;$col++){
    if(($row+$col)%2===0){
        echo"<td class='bgcolor'></td>";
    }
    else{
        echo "<td> </td>";
        
    }
}
echo "</tr>";
}


}


?>
</table>
</body>
</html>