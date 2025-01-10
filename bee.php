
<?php require_once'include/navbar.php'; ?>


<?php
include("config.php");
$stmt=$conn->prepare('select * from bee');
$stmt->execute();
$bees = $stmt->fetchAll();
?>



<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Bee Products</span></h2>
    <div class="row px-xl-5">
        <?php foreach($bees as $bee){ ?>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-item">
                    <a href="delete.php?id=<?= $bee['id']?>">DELETE</a><br>
                </div>
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src=" <?= $bee['imge']?>" alt="">

                </div>
                <div class="text-center py-4">

                    <a class="h6 text-decoration-none text-truncate" href="shop.php">SHOP</a>
                    <h6>price:<?= $bee['pricee']?>$</h6>
                    <h6>kind:<?= $bee['kind']?></h6>
                    <div class="d-flex align-items-center justify-content-center mt-2">

                    </div>
                </div>
            </div>
        </div>
        <?php  } ?>
<?php require_once'include/footer.php'; ?>