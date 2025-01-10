<?php require_once 'include/navbar.php'; ?>
<?php
include("config.php");
$stmt=$conn->prepare('select * from honey');
$stmt->execute();
$honeys = $stmt->fetchAll();
?>

<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Honey Products</span></h2>
    <div class="row px-xl-5">
        <?php foreach($honeys as $honey){ ?>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">

                <div class="product-item">
                    <a href="delete.php?id=<?= $honey['id']?>">DELETE</a><br>
                   <a href="update.php?id=<?= $honey['id']?>">EDIT</a>
                </div>

                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src=" <?= $honey['img']?>" alt="">
                </div>
                <div class="text-center py-4">
                    <h4>name:<?= $honey['name']?></h4>
                    <a class="h6 text-decoration-none text-truncate" href="shop.php">shop</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>price:<?= $honey['price']?>$</h5>
                    </div>
                </div>
            </div>
        </div>
        <?php  } ?>

        <?php require_once 'include/footer.php'; ?>