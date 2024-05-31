<?php
include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sobre nós</title>
   <style>@import url('https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Ubuntu:wght@400;500;700&display=swap');</style>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Sobre nós</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">
   <div class="flex">
      <div class="image">
         <img src="images/Convite Clube do livro2.png" alt="">
      </div>

      <div class="content">
         <h3>Porque nós?</h3>
         <p>Nossa livraria é um oásis para todos os amantes da leitura, um lugar onde cada livro é uma porta para novos horizontes. 
            Buscamos sempre proporcinar a melhor experiencia para nossos leitores.
            Explore nossas estantes virtuais, descubra clássicos intemporais, lançamentos emocionantes e joias literárias escondidas. </p>
            <p>Seja você um ávido leitor ou um curioso explorador de mundos literários, estamos ansiosos para guiá-lo nesta jornada única 
            através das letras e das emoções que somente os livros podem proporcionar. 
            Bem-vindo ao nosso cantinho de descobertas literárias, onde cada página vira uma nova aventura!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>
   </div>
</section>

<section class="reviews">
   <h1 class="title">Avaliações</h1>
   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Excelente seleção de livros! Esta livraria tem uma variedade incrível de gêneros e autores. 
            Encontrei facilmente o que estava procurando e também descobri novos títulos interessantes.  
            Recomendo fortemente esta livraria para todos os amantes de livros.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John Noah</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Uma livraria decente com uma boa variedade de livros, especialmente nas seções mais populares. 
            No entanto, eu estava esperando encontrar mais títulos obscuros e clássicos menos conhecidos.  
            No geral, é um lugar agradável para passar algum tempo explorando.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Luara Oliveira</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Esta livraria oferece uma ampla variedade de livros, desde best-sellers até títulos mais obscuros. 
            Gosto muito disso. No entanto, às vezes ela pode ficar um pouco lotada. 
            Ainda assim, é um ótimo lugar para encontrar leituras interessantes.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rick Carter</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Esta livraria é um verdadeiro paraíso para os amantes de livros. 
            A variedade de títulos é surpreendente, abrangendo desde clássicos até os mais recentes best-sellers.  
            Além disso, a equipe é extremamente atenciosa e sempre pronta para ajudar a encontrar o livro certo.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Elena Santos</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p> A plataforma era intuitiva e fácil de usar, com uma ampla seleção de livros em diferentes gêneros.
             O processo de compra foi simples e eficiente, e a entrega dos livros foi rápida e segura. 
             Além disso, a livraria oferecia recursos adicionais, como resenhas de usuários e recomendações personalizadas,
             que enriqueceram minha experiência de compra online.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Carlos José</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Encontrei uma vasta coleção de títulos, desde best-sellers até obras menos conhecidas, atendendo a diversos gostos e interesses. 
            O site era fácil de navegar, com ferramentas de busca eficientes e descrições detalhadas dos livros. 
            Além disso, a livraria virtual oferecia promoções e descontos atrativos, tornando a compra ainda mais vantajosa. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Fernanda Camargo</h3>
      </div>
   </div>
</section>

<section class="authors">

   <h1 class="title">Autores</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/colleenhouck.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Colleen Houck</h3>
      </div>

      <div class="box">
         <img src="images/George_R._R._Martin.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>George R. R. Martin</h3>
      </div>

      <div class="box">
         <img src="images/jonhgreen.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Jonh Green</h3>
      </div>

      <div class="box">
         <img src="images/Phil-Stamper.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Phil Stamper</h3>
      </div>

      <div class="box">
         <img src="images/anahuang.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Ana Huang</h3>
      </div>

      <div class="box">
         <img src="images/TessaBailey.webp" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Tessa Bailey</h3>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>