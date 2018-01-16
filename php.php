<?php  
  
$con = mysqli_connect('localhost','root','');  
if(!$con)  
{  
    echo 'not connect to the server';  
}  
if(!mysqli_select_db($con,'marix'))  
{ 
     echo 'database not selected';  
}  

$task = $_POST['task'];    
$sql = "INSERT INTO account(todo) VALUES('$task')";  
  
if(!mysqli_query($con,$sql))  
{  
    echo 'Not inserted';  
}  
else  
{  
    header(" url=php.php") ;   
}  
?>  