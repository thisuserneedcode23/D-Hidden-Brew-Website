<!-- login_header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <!-- Add your logo image style here -->
   <style>
      .logo {
         max-width: 100px; /* Adjust the size as needed */
         max-height: 100px; /* Adjust the size as needed */
         display: block;
         margin: 10px auto; /* Adjust the margin as needed */
      }
   </style>

</head>
<body>

<!-- Add your logo image here -->
<img src="images/logo.png" alt="Logo" class="logo">

<?php
if (isset($message)) {
   foreach ($message as $message) {
      echo '
      <div class="message">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<!-- Continue with the rest of your login form -->

