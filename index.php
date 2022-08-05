<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/all.css">
    <title>Document</title>
</head>
<body>
   <div class="wrapper">
      <div class="form_login">
         <form action="register.php" method="post">
            <label>
               <span class="title">Name</span>
               <input type="text" name="name">
            </label>
            <label>
               <span class="title">Surname</span>
               <input type="text" name="surname">
            </label>
            <label>
               <span class="title">Email</span>
               <input type="email" name="email">
            </label>
            <label>
               <span class="title">Phone</span>
               <input type="phone" name="phone">
            </label>
            <label>
               <span class="title">Password</span>
               <input type="password" name="password">
            </label>
            <input type="submit">
         </form>
      </div>
   </div>
   <?php
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $name = $_REQUEST['fname'];
      if (empty($name)) {
         echo 'Name is empty';
      } else {
         echo $name;
      }
   }
   ?>
</body>
</html>