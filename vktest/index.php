<?php
  session_start();
  include 'connect.php'
?>
<div class="product-item">
  
  <div class="product-list">
  <?php
        $result = $mysqli->query('SELECT * FROM `card`'); 
        while($row = $result->fetch_assoc())
        {
            echo '<p>'.$row['name'].'</p>';
            echo '<p>'.$row['price'].' рублей'.'<p>';
            $id= $row['id'];
            $_SESSION['id'] = $id;
            echo '<a href="card.php?id ='.$row['id'].' class="button" >В корзину</a>';
        }
        ?>
  </div>
</div>

