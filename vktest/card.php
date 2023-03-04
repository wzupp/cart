<?php
session_start();
include 'connect.php';

?>

<link rel="stylesheet" href="/vktest/style.css" />
<table>
<tr >
    <th>
        Корзина
    </th>
</tr>
<tr>
    <td>
        <?php
            
            $id = $_SESSION['id'];
            $query = "SELECT `name`, `price` FROM `card` WHERE `id` = $id";
            $result = mysqli_query($mysqli,$query);
            while ($row = $result->fetch_assoc()){
                printf("%s%s%s%s\n",$row ['name'],'<br>',$row['price'],' рублей');
            } 
        ?>
    </td>
</tr>
</table>
<form action="confirmation.php" method="post" style="margin-left:600px;">
<input type="submit" name="submit" value="Оформить заказ" style=" height:30px; padding: 0px 20px;" />
</form>

