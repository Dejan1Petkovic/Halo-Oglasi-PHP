<?php
 $title= 'Halo Oglasi';
 $header= 'Oglas';
 include 'parts/head.php'; ?>

<?php
  $oglas = findOne($_GET['id']);
 ?>


  <div class="panel panel-default">

    <div class="panel-heading text-center">
        <h3><?php echo $oglas['productTitle']; ?></h3>
    </div>

    <div class="panel-body">
        <div class="col-lg-8 text-center forImg">
          <img src="" alt="Place for picture">
        </div>
        <div class="col-lg-4">
          <p>Telefon : <?php echo $oglas['phone']; ?></p><br>
          <p>Email : <?php echo $oglas['email']; ?></p><br>
        </div>
        <div class="col-lg-12">
          <p><?php echo $oglas['aboutProduct']; ?></p>

        </div>
    </div>
    <div class="panel-footer text-right">

      <p class="btn btn-danger">Cena : <?php echo $oglas['price']; ?></p><br>
    </div>

  </div>





<?php include 'parts/footer.php'; ?>
