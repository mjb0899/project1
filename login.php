<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 09/03/2017
 * Time: 13:08
 */
//create connection
include("connection.php");

//validation
if(empty($_POST["username"])||empty($_POST["password"]))
{
    echo "Both the fields are necessary";
}
else{
    $username=$_POST["username"];
    $password=$_POST["password"];
}

//Sql statement
$sql="SELECT uid FROM users WHERE username='$username'and password='$password'";

//result to hold query
$result=mysqli_query($db,$sql);

//validate results
if(mysqli_num_rows($result)==1){
    header("location:home.php");
}else{
    echo "Incorrect username and password";
}
