<?php
require 'db-connect.php';
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

// echo $name;
// echo '<br>';
// echo $surname;
// echo '<br>';
// echo $email;
// echo '<br>';
// echo $phone;
// echo '<br>';
// echo $password;
// echo '<br>';

$password  = md5($password);

$selectEmail = "SELECT * FROM users WHERE email='$email'";
$checkEmail =  mysqli_query($connection, $selectEmail);


if(mysqli_num_rows($checkEmail)){
   header("Location: login.php?login=true;&email={$email}");
   // echo 'this email address is already exist';
} else{
   $query = "INSERT INTO users (name, surname, email, phone, password)
 VALUES('$name', '$surname', '$email', '$phone', '$password')";
}

$selectPassword = "SELECT * FROM users WHERE password= '$password'";
$checkPassword = mysqli_query($connection, $selectPassword);

if(mysqli_num_rows($checkPassword)){
   header("Location: pass.php?password=true;&password={$password}");
} else{
   $query = "INSERT INTO users (name, surname, email, phone, password)
 VALUES('$name', '$surname', '$email', '$phone', '$password')"; 
}




 
//    $query = "INSERT INTO users (name, surname, email, phone, password)
//  VALUES('$name', '$surname', '$email', '$phone', '$password')";


//  if(mysqli_query($connection, $query)){
//    echo 'User successfuly created';
//  } else {
//    echo mysqli_error($connection);
//  }


?>