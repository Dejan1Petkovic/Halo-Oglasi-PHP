<?php
$title= 'Halo Oglasi';
$header= 'Lista oglasa';
include 'parts/head.php'; ?>


<?php

            while ($row = mysqli_fetch_assoc($query)) {
              $id = $row['id'];
              $name = $row['name'];
              $productTitle = $row['productTitle'];
              $aboutProduct = $row['aboutProduct'];
              $phone = $row['phone'];
              $email = $row['email'];
              $price = $row['price'];
              // echo "<pre>";
              // var_dump($row)."<br>";
              // echo "</pre>";

 ?>
<a href="productPage.php?id=<?php echo $id ?>">
  <div class="panel panel-default">

    <div class="panel-heading text-center">
        <h3><?php echo $productTitle; ?></h3>

    </div>

    <div class="panel-body">
        <p><?php echo $aboutProduct; ?></p>
    </div>
    <div class="panel-footer text-right">
        <span class="btn btn-primary">Cena : <?php echo $price; ?></span>
    </div>

  </div>
</a>

<?php
}
 ?>


<?php include 'parts/footer.php'; ?>
