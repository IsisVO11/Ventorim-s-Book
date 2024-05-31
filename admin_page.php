<?php
 include 'config.php';
 session_start();
 $admin_id = $_SESSION['admin_id'];
 if(!isset($admin_id)){
    header('location:login.php');
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Painel Administrador</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/admin_style.css">
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript">
     google.charts.load("current", {packages:["corechart"]});
     google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var jsonData = $.ajax({
          url: "fetch_data.php",
          dataType: "json",
          async: false
          }).responseText;
      var data = new google.visualization.DataTable(jsonData);
      var options = {
        title: 'Gêneros Mais Vendidos',
        legend: 'none',
        pieSliceText: 'label',
        pieStartAngle: 100,
      };
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data, options); }
  </script>
</head>
<body>
 <?php include 'admin_header.php'; ?>
 <section class="dashboard">
    <h1 class="title">Painel</h1>
    <div class="box-container">
       <div class="box">
          <?php
              $total_pendings = 0;
              $select_pending = mysqli_query($conn, "SELECT total_price FROM `orders` WHERE payment_status = 'pending'") or die('query failed');
              if(mysqli_num_rows($select_pending) > 0){
                 while($fetch_pendings = mysqli_fetch_assoc($select_pending)){
                    $total_price = $fetch_pendings['total_price'];
                    $total_pendings += $total_price;
                  };
               };
            ?>
          <h3>$<?php echo $total_pendings; ?>/-</h3>
          <p>Valor Pendente</p>
       </div>
       <div class="box">
          <?php
             $total_completed = 0;
             $select_completed = mysqli_query($conn, "SELECT total_price FROM `orders` WHERE payment_status = 'completed'") or die('query failed');
             if(mysqli_num_rows($select_completed) > 0){
                while($fetch_completed = mysqli_fetch_assoc($select_completed)){
                   $total_price = $fetch_completed['total_price'];
                   $total_completed += $total_price;
                  };
               };
            ?>
           <h3>$<?php echo $total_completed; ?>/-</h3>
           <p>Pagamentos Completos</p>
        </div>
        <div class="box">
          <?php 
             $select_orders = mysqli_query($conn, "SELECT * FROM `orders`") or die('query failed');
             $number_of_orders = mysqli_num_rows($select_orders);
            ?>
          <h3><?php echo $number_of_orders; ?></h3>
          <p>Pedidos Feitos</p>
        </div>
       <div class="box">
          <?php 
             $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
             $number_of_products = mysqli_num_rows($select_products);
           ?>
          <h3><?php echo $number_of_products; ?></h3>
          <p>Produtos Adicionados</p>
        </div>
        <div class="box">
          <?php 
             $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE user_type = 'user'") or die('query failed');
             $number_of_users = mysqli_num_rows($select_users);
            ?>
          <h3><?php echo $number_of_users; ?></h3>
          <p>Utilizadores</p>
       </div>
       <div class="box">
          <?php 
             $select_admins = mysqli_query($conn, "SELECT * FROM `users` WHERE user_type = 'admin'") or die('query failed');
             $number_of_admins = mysqli_num_rows($select_admins);
           ?>
          <h3><?php echo $number_of_admins; ?></h3>
          <p>Administradores</p>
       </div>
       <div class="box">
          <?php 
             $select_account = mysqli_query($conn, "SELECT * FROM `users`") or die('query failed');
             $number_of_account = mysqli_num_rows($select_account);
            ?>
          <h3><?php echo $number_of_account; ?></h3>
          <p>Total de Contas</p>
        </div>
       <div class="box">
          <?php 
             $select_messages = mysqli_query($conn, "SELECT * FROM `message`") or die('query failed');
             $number_of_messages = mysqli_num_rows($select_messages);
           ?>
          <h3><?php echo $number_of_messages; ?></h3>
          <p>Novas Mensagens</p>
       </div>

       <div id="chart_div" style="width: 100%; height: 100%;"> -- Codigo do grafico barras
    <canvas id="myChart"></canvas>
    <?php
    $query = "SELECT c.name AS product_name, SUM(c.quantity) AS total_sold
              FROM cart c
              GROUP BY c.name";
    $result = mysqli_query($conn, $query);
    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[$row['product_name']] = $row['total_sold'];
    }
    ?>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode(array_keys($data)); ?>,
                datasets: [{
                    label: 'Produtos nos carrinhos',
                    data: <?php echo json_encode(array_values($data)); ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</div>


<div id="piechart" style="width: 900px; height: 500px;">-- Codigo grafico pizza
<?php
$query = "SELECT p.genre, SUM(o.quantity) AS total_quantity 
FROM orders o 
JOIN product p ON o.product_id = p.id 
GROUP BY p.genre 
ORDER BY total_quantity DESC";
$result = mysqli_query($conn, $query);
$data = array();
$data[] = ['Genre', 'Quantidade'];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = [$row['genre'], (int) $row['total_quantity']];
}
echo json_encode($data);
?> </div>


<div id="chart_div" style="width: 900px; height: 500px;"> -- codigo grafico linha
<script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Data');
            data.addColumn('number', 'Vendas');
            data.addRows(<?php echo json_encode($data); ?>);

            var options = {
                title: 'Vendas dos Produtos por Período',
                curveType: 'function',
                legend: { position: 'bottom' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

            chart.draw(data, options);
        }
    </script>
<?php
$query = "SELECT DATE(placed_on) AS data_pedido, COUNT(*) AS total_pedidos 
          FROM orders 
          GROUP BY DATE(placed_on) 
          ORDER BY DATE(placed_on)";
$result = mysqli_query($conn, $query);
$data = array();
$data[] = ['Data Pedido', 'Total Pedidos'];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = [$row['data_pedido'], (int) $row['total_pedidos']];
}
echo json_encode($data);
?>
</div>
    </div>
 </section>
 <script src="js/admin_script.js"></script>
</body>
</html>