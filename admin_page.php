<?php

@include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php @include 'admin_header.php'; ?>

<section class="dashboard">

   <h1 class="title">dashboard</h1>

   <div class="box-container">

      <div class="box">
         <?php
            $total_pendings = 0;
            $select_pendings = mysqli_query($conn, "SELECT * FROM `orders` WHERE payment_status = 'pending'") or die('query failed');
            while($fetch_pendings = mysqli_fetch_assoc($select_pendings)){
               $total_pendings += $fetch_pendings['total_price'];
            };
         ?>
         <a href="#" class="total-pendings-link">
            <i class="fa fa-clock"></i> Total Pendings
         </a>
         <h3>PHP <?php echo $total_pendings; ?><div class="00"></div></h3>
         <p>Total Pendings</p>
      </div>
      <div class="box">
         <?php
            $total_completes = 0;
            $select_completes = mysqli_query($conn, "SELECT * FROM `orders` WHERE payment_status = 'completed'") or die('query failed');
            while($fetch_completes = mysqli_fetch_assoc($select_completes)){
               $total_completes += $fetch_completes['total_price'];
            };
         ?>
         <a href="#" class="completed-payments-link">
            <i class="fa fa-check"></i> Completed Payments
         </a>
         <h3>PHP <?php echo $total_completes; ?>.00</h3>
         <p>Completed Payments</p>
      </div>

      <div class="box">
         <?php
            $select_orders = mysqli_query($conn, "SELECT * FROM `orders`") or die('query failed');
            $number_of_orders = mysqli_num_rows($select_orders);
         ?>
         <a href="#" class="orders-placed-link">
            <i class="fa fa-list-alt"></i> Orders Placed
         </a>
         <h3><?php echo $number_of_orders; ?></h3>
         <p>Orders Placed</p>
      </div>

      <div class="box">
         <?php
            $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
            $number_of_products = mysqli_num_rows($select_products);
         ?>
         <a href="#" class="total-products-link">
             <i class="fa fa-shopping-basket"></i> Total Products
         </a>
         <h3><?php echo $number_of_products; ?></h3>
         <p>Total Products</p>
      </div>

      <div class="box">
         <?php
            $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE user_type = 'user'") or die('query failed');
            $number_of_users = mysqli_num_rows($select_users);
         ?>
         <a href="#" class="total-client-users-link">
            <i class="fa fa-users"></i> Total Client Users
         </a>
         <h3><?php echo $number_of_users; ?></h3>
         <p>Total Client Users</p>
      </div>

      <div class="box">
         <?php
            $select_admin = mysqli_query($conn, "SELECT * FROM `users` WHERE user_type = 'admin'") or die('query failed');
            $number_of_admin = mysqli_num_rows($select_admin);
         ?>
         <a href="#" class="total-admin-users-link">
            <i class="fa fa-users"></i> Total Admin Users
         </a>
         <h3><?php echo $number_of_admin; ?></h3>
         <p>Total Admin Users</p>
      </div>

      <div class="box">
         <?php
            $select_employee = mysqli_query($conn, "SELECT * FROM `users` WHERE user_type = 'employee'") or die('query failed');
            $number_of_employee = mysqli_num_rows($select_employee);
         ?>
         <a href="#" class="total-employee-users-link">
            <i class="fa fa-users"></i> Total Employee Users
         </a>
         <h3><?php echo $number_of_employee; ?></h3>
         <p>Total Employee Users</p>
      </div>

      <div class="box">
         <?php
            $select_account = mysqli_query($conn, "SELECT * FROM `users`") or die('query failed');
            $number_of_account = mysqli_num_rows($select_account);
         ?>
         <a href="#" class="total-admin-users-link">
            <i class="fa fa-users"></i> Total Account
         </a>
         <h3><?php echo $number_of_account; ?></h3>
         <p>Total Accounts</p>
      </div>

      <div class="box">
         <?php
            $select_messages = mysqli_query($conn, "SELECT * FROM `message`") or die('query failed');
            $number_of_messages = mysqli_num_rows($select_messages);
         ?>
         <a href="#" class="new-messages-link">
            <i class="fa fa-envelope"></i> New Messages
         </a>
         <h3><?php echo $number_of_messages; ?></h3>
         <p>New Messages</p>
      </div>


   </div>

</section>













<script src="js/admin_script.js"></script>

</body>
</html>