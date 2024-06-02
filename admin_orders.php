<?php
 include 'config.php';
 session_start();
 $admin_id = $_SESSION['admin_id'];
 if(!isset($admin_id)){
    header('location:login.php');
   }
 if(isset($_POST['update_order'])){
    $order_update_id = $_POST['order_id'];
    $update_payment = $_POST['update_payment'];
    mysqli_query($conn, "UPDATE `orders` SET payment_status = '$update_payment' WHERE id = '$order_update_id'") or die('query failed');
    $message[] = 'payment status has been updated!';
   }
 if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM `orders` WHERE id = '$delete_id'") or die('query failed');
    header('location:admin_orders.php');
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pedidos</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/admin_style.css">
</head>
<body>
 <?php include 'admin_header.php'; ?>
 <section class="orders">
    <h1 class="title">Pedidos Feitos</h1>
    <div class="box-container">
       <?php
          $select_orders = mysqli_query($conn, "SELECT * FROM `orders`") or die('query failed');
          $addresses = [];
          if(mysqli_num_rows($select_orders) > 0){
             while($fetch_orders = mysqli_fetch_assoc($select_orders)){
               $addresses[] = $fetch_orders['address'];
                ?>
                <div class="box">
                   <p> ID Utilizador : <span><?php echo $fetch_orders['user_id']; ?></span> </p>
                   <p> Pedido Feito : <span><?php echo $fetch_orders['placed_on']; ?></span> </p>
                   <p> Nome : <span><?php echo $fetch_orders['name']; ?></span> </p>
                   <p> Numero : <span><?php echo $fetch_orders['number']; ?></span> </p>
                   <p> Email : <span><?php echo $fetch_orders['email']; ?></span> </p>
                   <p> Endereço : <span><?php echo $fetch_orders['address']; ?></span> </p>
                   <p> Todos Produtos : <span><?php echo $fetch_orders['total_products']; ?></span> </p>
                   <p> Preço total : <span>$<?php echo $fetch_orders['total_price']; ?>/-</span> </p>
                   <p> Metodo de Pagamento : <span><?php echo $fetch_orders['method']; ?></span> </p>
                   <form action="" method="post">
                      <input type="hidden" name="order_id" value="<?php echo $fetch_orders['id']; ?>">
                      <select name="update_payment">
                         <option value="" selected disabled><?php echo $fetch_orders['payment_status']; ?></option>
                         <option value="pending">Pendente</option>
                         <option value="completed">Completo</option>
                      </select>
                      <input type="submit" value="update" name="update_order" class="option-btn">
                      <a href="admin_orders.php?delete=<?php echo $fetch_orders['id']; ?>" onclick="return confirm('Deletar esse pedido?');" class="delete-btn">Deletar</a>
                   </form>
                </div>
                <?php
               }
           }else{
             echo '<p class="empty">Sem pedidos ainda!</p>';
            }
         ?>
     </div>
  </section>
  <div id="map" style="height: 500px; width: 100%; margin-top: 50px;"></div>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2clHe-6walaNSX7JyMkrhXhg7EsCly0A"></script>
  <script>
    function initMap() {
       var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: {lat: -23.55052, lng: -46.633308}  // Centro inicial do mapa (por exemplo, São Paulo)
        });
        var geocoder = new google.maps.Geocoder();
        var bounds = new google.maps.LatLngBounds();
       <?php foreach ($addresses as $address) { ?>
          geocodeAddress(geocoder, map, bounds, "<?php echo $address; ?>");
       <?php } ?>
      }

     function geocodeAddress(geocoder, resultsMap, bounds, address) {
       geocoder.geocode({'address': address}, function(results, status) {
           if (status === 'OK') {
              var marker = new google.maps.Marker({
                map: resultsMap,
                position: results[0].geometry.location
               });
               bounds.extend(results[0].geometry.location);
               resultsMap.fitBounds(bounds);
               var infoWindow = new google.maps.InfoWindow({
                content: address
              });
              marker.addListener('mouseover', function() {
                infoWindow.open(resultsMap, marker);
              });
              marker.addListener('mouseout', function() {
                infoWindow.close();
              });
           } else {
              console.log('Mapa não foi bem-sucedido devido a: ' + status);
            }
         });
      }
     // Inicia o mapa após o carregamento da página
     document.addEventListener("DOMContentLoaded", function() {
       initMap();
      });
  </script>
  <script src="js/admin_script.js"></script>
</body>
</html>
