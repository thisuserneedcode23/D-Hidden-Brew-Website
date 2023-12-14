<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="flex">

      <!-- Add a div for the logo -->
      <div class="logo-container">
         <img src="images/cofe.png" alt="Logo" class="logo-img">

         <img src="images/logo.png" alt="Logo" class="logo-img">
         <a href="admin_page.php" class="logo">Admin<span>Dashboard</span></a>
      </div>

      <nav class="navbar">
         <a href="admin_page.php"><i class="fas fa-home"></i> Home</a>
         <a href="admin_products.php"><i class="fas fa-shopping-cart"></i> Products</a>
         <a href="admin_orders.php"><i class="fas fa-shopping-bag"></i> Orders</a>
         <a href="admin_users.php"><i class="fas fa-users"></i> Users</a>
         <a href="admin_contacts.php"><i class="fas fa-envelope"></i> Messages</a>
      </nav>


      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
         <p>username : <span><?php echo $_SESSION['admin_name']; ?></span></p>
         <p>email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">logout</a>
         <div>new <a href="login.php">login</a> | <a href="register.php">register</a> </div>
      </div>

   </div>

</header>