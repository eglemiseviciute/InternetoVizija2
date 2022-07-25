<?php
session_start();

$_SESSION;



include ("conection.php");
include ("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    //reading WAS POSTED

$user_name = $_POST['user_name'];
$password = $_POST['password'];

if(!empty($user_name)&& !empty($password)){

    // $user_id = random_num(20);

    $query = "select * from  users where user_name = '$user_name' limit 1";
$result = mysqli_query($con, $query);

if($result){
    if($result && mysqli_num_rows($result)>0){


        $user_data = mysqli_fetch_assoc($result);
        if($user_data['password'] === $password){

            $_SESSION ['user_id'] = $user_data['user_id'];
            header("Location: index.php");
            die;
        }
}





echo "wrong user name or pasword!";


}else{
    echo "please enter some valid information!";
}
}}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<header>
    <section class="navbar">
        <div class="container">
            <div class="logo" >
<h1>InternetoVizija</h1>
            </div>
            
            
        </div>
    </section>
    </header>

    
        <div class="form">
            
<div class="login">
<h3>Login Here</h3>
<form method="post">
    <div class="form-group">
        <label>Username</label>
        <input id="text" type="text" name="user_name">

    </div>
    <div class="form-group">
        <label>Password</label>
        <input id= "text "type="password" name="password" >

    </div>
    <button type="submit" >Login</button>
    <p>Already a member? <a href="signup.php">SignUp</a></p>
</form>
</div>



         
        
    </div>
</body>
</html>