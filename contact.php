<?php
 include 'config.php';
 session_start();
 $user_id = $_SESSION['user_id'];
 if(!isset($user_id)){
    header('location:login.php');
   }
 if(isset($_POST['send'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $msg = mysqli_real_escape_string($conn, $_POST['message']);
    $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
    if(mysqli_num_rows($select_message) > 0){
       $message[] = 'message sent already!';
    }else{
        mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
       $message[] = 'message sent successfully!';
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contacto</title>
   <style>@import url('https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Ubuntu:wght@400;500;700&display=swap');</style>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
 <?php include 'header.php'; ?>
 <div class="heading">
    <h3>Entre em Contacto</h3>
    <p> <a href="home.php">Home</a> / Contacto </p>
  </div>

 <section class="contact">
    <form action="" method="post">
       <h3>Mande Mensagem!</h3>
       <input type="text" name="name" required placeholder="Insira seu Nome" class="box">
       <input type="email" name="email" required placeholder="Insira seu Email" class="box">
       <input type="number" name="number" required placeholder="Insira seu Numero" class="box">
       <textarea name="message" class="box" placeholder="Mensagem" id="" cols="30" rows="10"></textarea>
       <input type="submit" value="Envie" name="send" class="btn">
    </form>
 </section>
 <?php include 'footer.php'; ?>
 <script src="js/script.js"></script>
</body>
</html>