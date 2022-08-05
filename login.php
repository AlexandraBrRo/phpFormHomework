<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/all.css">
    <title>login</title>
</head>
<body>
   <?php 
   if($_GET['login']){ ?>
      <div class="error">This email address is already exist</div>
      <div class="error">Please login !</div>
   <?php
   }
   ?>
   <div class="wrapper">
      <div class="form_login">
         <form action="register.php" method="post">
            <label>
               <span class="title">Email</span>
               <input type="email" name="email" value="<?php echo $_GET['email'] ?>">
            </label>
            <label>
               <span class="title">Password</span>
               <input type="password" name="password">
            </label>
            <input type="submit">
         </form>
      </div>
   </div>
</body>
</html>