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
   <div class="header-1">
      <div class="flex">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <p> Novo <a href="login.php">Login</a> | <a href="register.php">Registro</a> </p>
      </div>
   </div>
   <div class="header-2">
      <div class="flex">
         <div class="logo">
            <img src="images/Ventorim's Book.png">
         </div>
         <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="index.php">Blog</a>
            <a href="about.php">About Us</a>
            <a href="shop.php">Shop</a>
            <a href="contact.php">Contacto</a>
            <a href="orders.php">Pedidos</a>
         </nav>
         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number);
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>
         <div class="user-box">
            <p>Utilizador: <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>E-mail: <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">Logout</a>
         </div>
      </div>
   </div>
</header>