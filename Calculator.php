<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&display=swap" rel="stylesheet">   
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    *{
margin: 0;
padding: 0;
box-sizing: border-box;
    }
.container{
    width: 100vw;
    height: 100vh;
    background-color: yellow;
display: grid;
place-items: center;
font-family: 'Akaya Kanadaka', cursive;
font-size:40px;
}
.input{
    width: 35%;
    height: 70%;
    background-color: black;
   display:flex;
   justify-content:center;
   align-items:center;

}
.num1,.num2,.operation{
    width: 50px;
    height: 50px;
    
}
p{
    width:30;
    height:40;
    
}

</style>
</head>
<body>
  
<div class="container">
<center>
<h2>PHP CALCULATOR </h2>
</center>
    <div class="input">
        <form method="POST">
    
        <div class="num1">
             <input type="text" name="num1" placeholder="Enter your number">
        </div>
        <div class="num2">   
          <input type="text" name="num2" placeholder="Enter your number">
    </div> 
    <div class="operation"><select name="operation">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mul">Multiply</option>
        <option value="div">Division</option>
    </select></div>
    <div class="submit">
            <input type="submit" name="submit">
            </div>
            </div>           
             <p>Answer :  
    <?php
if(isset($_POST['submit'])){
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$operation=$_POST['operation'];
/*$add=$_POST['add'];
$sub=$_POST['sub'];
$mul=$_POST['mul'];
$div=$_POST['div'];*/
switch($operation){
    case "add":$sum=$num1+$num2;
break;
case "sub":$sum=$num1-$num2;
break;
case "mul":$sum=$num1*$num2;
break;
case "div":$sum=$num1/$num2;
break;

}
echo $sum;
}

?>

</p>

</div>
</form>
</body>
</html>