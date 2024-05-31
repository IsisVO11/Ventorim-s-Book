<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria Ventorim</title>
    <style>@import url('https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Ubuntu:wght@400;500;700&display=swap');</style>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section>
        <nav>
            <div class="logo">
                <img src="images/Ventorim's Book.png">
            </div>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">Sobre nós</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="#blog">Blog</a></li>
            </ul>
        </nav>
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

    <!--Serviços-->

    <div class="services">
        <div class="services_box">
            <div class="services_card">
                <i class="fa-solid fa-truck-fast"></i>
                <h3>Envio Rapido</h3>
                <p>
                    Contamos com uma equipe para envio de encomendas que trabalha com eficiência. 
                </p>
            </div>
            <div class="services_card">
                <i class="fa-solid fa-headset"></i>
                <h3>Serviços 24 x 7</h3>
                <p>
                    Trabalhamos 24h, 7 dia por semana, para seu melhor atendimento.
                </p>
            </div>
            <div class="services_card">
                <i class="fa-solid fa-tag"></i>
                <h3>Melhores ofertas</h3>
                <p>
                    Temos as melhores ofertas de mercado, procurando sempre o conforto de nossos clientes.
                </p>
            </div>

            <div class="services_card">
                <i class="fa-solid fa-lock"></i>
                <h3>Pagamentos seguros</h3>
                <p>
                    Temos verificação no momento de pagamento, garantindo sempre a segurança de nossos clientes.
                </p>
            </div>
        </div>
    </div>

    <!--Banner-->
 <div class="slider">
     <div class="slides">
         <input type="radio" name="radio-btn" id="radio1">
         <input type="radio" name="radio-btn" id="radio2">
         <input type="radio" name="radio-btn" id="radio3">
         <input type="radio" name="radio-btn" id="radio4">

         <div class="slide first">
             <img src="images/livros.png" alt="Imagem 1">
         </div>
         <div class="slide">
             <img src="images/Desconto para primeira vez.png" alt="Imagem 2">
         </div>
         <div class="slide">
             <img src="images/Descontos.png" alt="Imagem 3">
         </div>
         <div class="slide">
             <img src="images/Mais descontos somente no nosso site.png" alt="Imagem 4">
         </div>
     </div>
     <div class="manual-navigation">
         <label for="radio1" class="manual-btn"></label>
         <label for="radio2" class="manual-btn"></label>
         <label for="radio3" class="manual-btn"></label>
         <label for="radio4" class="manual-btn"></label>
     </div>
 </div>


    <!--Blog-->
    
    <div class="blog">
        <h1>Nosso Blog</h1>
        <div class="blog_box">

            <div class="blog_card">
                <div class="blog_img">
                    <img src="images/blog_2.jpg">
                </div>
                <div class="blog_tag">
                    <h2>Blog</h2>
                    <p>
                        Nosso blog de livros é um refúgio para os apaixonados pela magia da leitura. 
                        Aqui, mergulhamos fundo em resenhas envolventes que revelam os segredos e encantos de cada obra, 
                        guiando você na escolha do próximo livro que irá cativar sua imaginação. 
                        Além disso, exploramos temas literários intrigantes, entrevistas inspiradoras com autores e 
                        dicas para tornar sua jornada de leitura ainda mais enriquecedora. 
                        Junte-se a nós nessa viagem pelos reinos da literatura, onde cada página vira uma aventura e cada livro é uma porta para infinitas possibilidades. 
                    </p>
                    <div class="blog_icon">
                        <i class="fa-solid fa-calendar-days"></i>
                        <i class="fa-solid fa-heart"></i>
                    </div>
                </div>
            </div>

            <div class="blog_card">
                <div class="blog_img">
                    <img src="images/Convite Clube do livro2.png">
                </div>
                <div class="blog_tag">
                    <h2>Clube do livro</h2>
                    <p>
                        Bem-vindo ao nosso aconchegante Clube do Livro, um espaço onde as mentes curiosas e os corações apaixonados pela leitura se reúnem para compartilhar, 
                        explorar e celebrar o mundo da literatura. Nossos encontros são uma festa para os sentidos, 
                        onde cada página vira uma nova conexão e cada capítulo nos aproxima ainda mais.
                        Todos os sabados estaremos em live aberta, sempre com um convidado inedito.
                        Se increva no nosso instagram para receber avisos sobre futuras lives.
                    </p>
                    <div class="blog_icon">
                        <i class="fa-solid fa-calendar-days"></i>
                        <i class="fa-solid fa-heart"></i>
                    </div>
                </div>
            </div>

            <div class="blog_card">
                <div class="blog_img">
                    <img src="images/Mais descontos somente no nosso site.png">
                </div>
                <div class="blog_tag">
                    <h2>Descontos</h2>
                    <p>
                        Seja você um leitor voraz ou alguém que busca expandir seus horizontes literários, este é o lugar perfeito para se conectar, aprender e, 
                        acima de tudo, se maravilhar com as infinitas possibilidades que os livros têm a oferecer. 
                        Junte-se a nós e faça parte de uma comunidade que vive e respira histórias!
                        Se inscreva no nosso blog para descobrir mais descontos, e para ficar sempre atualizado.
                    </p>
                    <div class="blog_icon">
                        <i class="fa-solid fa-calendar-days"></i>
                        <i class="fa-solid fa-heart"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="banner.js"></script>

    <!--Rodapé-->

    <footer>
        <div class="footer_main">

            <div class="tag">
                <img src="images/Ventorim's Book.png">
                <p>
                    Seja bem-vindo ao maravilhoso universo dos livros!
                </p>

            </div>

            <div class="tag">
                <h1>Informações de contacto</h1>
                <a href="#"><i class="fa-solid fa-phone"></i>+351 123 456 789</a>
                <a href="#"><i class="fa-solid fa-phone"></i>+94 32 444 699</a>
                <a href="#"><i class="fa-solid fa-envelope"></i>bookstore123@gmail.com</a>
                
            </div>

            <div class="tag">
                <h1>Follow Us</h1>
                <div class="social_link">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>
                
            </div>

        </div>

    </footer>
   
</body>
</html>