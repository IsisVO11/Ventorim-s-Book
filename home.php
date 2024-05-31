<?php
  include 'config.php';
 session_start();
 $user_id = $_SESSION['user_id'];

 if(!isset($user_id)){
    header('location:login.php');
  }

 if(isset($_POST['add_to_cart'])){
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_genre = $_POST['product_genre'];
    $product_quantity = $_POST['product_quantity'];
    $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

    if(mysqli_num_rows($check_cart_numbers) > 0){
       $message[] = 'Ja esta no carrinho!';
    }else{
       mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, genre, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_genre', '$product_quantity', '$product_image')") or die('query failed');
       $message[] = 'Produto adicionado!';
      }
   } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
   <style>@import url('https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Ubuntu:wght@400;500;700&display=swap'); </style>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
 <?php include 'header.php'; ?>
 <section class="home">
    <div class="main">
       <div class="main_tag">
          <h1>Bem Vindo(a) a<br><span>Ventorim's Book Store</span></h1>
          <p>
             Bem-vindo à nossa encantadora livraria virtual, um refúgio literário onde as palavras ganham vida e a imaginação se expande sem limites. 
             Aqui, mergulhe em um universo repleto de páginas cheias de histórias emocionantes, conhecimento profundo e aventuras inesquecíveis.
          </p>
        </div>
    </div>
 </section>

   <section class="products"> 
    <h1 class="title">Ultimos Lançamentos</h1>
     <div class="box-container">
        <?php 
          $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
          if(mysqli_num_rows($select_products) > 0){
           while($fetch_products = mysqli_fetch_assoc($select_products)){
        ?>
       <form action="" method="post" class="box">
          <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
          <div class="name"><?php echo $fetch_products['name']; ?></div>
          <div class="price">$<?php echo $fetch_products['price']; ?>/-</div>
          <div class="genre">Gênero: <?php echo $fetch_products['genre']; ?></div>
          <input type="number" min="1" name="product_quantity" value="1" class="qty">
          <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
          <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
          <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
          <input type="hidden" name="product_genre" value="<?php echo $fetch_products['genre']; ?>">
          <input type="submit" value="add to cart" name="add_to_cart" class="btn">
       </form>
       <?php
           }
          }else{
          echo '<p class="empty">Sem produtos no momento!</p>';
          }
        ?>
     </div>

    <div class="load-more" style="margin-top: 2rem; text-align:center">
       <a href="shop.php" class="option-btn">Veja mais</a>
    </div>
 </section>

 <section class="about">
    <div class="flex">
       <div class="image">
          <img src="images/Ventorim's Book Store.png" alt="">
       </div>

       <div class="content">
          <h3>Sobre Nós</h3>
          <p>Nossa livraria é um oásis para todos os amantes da leitura, um lugar onde cada livro é uma porta para novos horizontes. 
            Buscamos sempre proporcinar a melhor experiencia para nossos leitores.</p>
          <a href="about.php" class="btn">Veja Mais</a>
       </div>
    </div> 
 </section>

 <section class="home-contact">
    <div class="content">
       <h3>Tem questões?</h3>
       <p>Junte-se a nós e faça parte de uma comunidade que vive e respira histórias!
         Se inscreva no nosso blog para descobrir mais e para ficar sempre atualizado.</p>
       <a href="contact.php" class="white-btn">Entre em contacto</a>
    </div>
 </section>

 <?php include 'footer.php'; ?>

 <script src="js/script.js"></script>

</body>
</html>