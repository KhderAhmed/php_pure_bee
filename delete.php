<?php require_once 'include/base.php';?>
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">ADD QUEEN</span></h2>
<?php
if (isset($_GET['id'])) {
    include("config.php");
    $id=$_GET['id'];
    $query="DELETE FROM queen WHERE id = ?";
    $stmt=$conn->prepare($query);
    if (!($stmt->execute([$id]))) {
        die('Erorr');
    }else {
        echo "success delete";
    }
    echo'<br> <a href="queen.php"> retren to a base page </a>';
}

?>
    <hr class="font-weight-bold">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">ADD HONEY</span></h2>
<?php
if (isset($_GET['id'])) {
    include("config.php");
    $id=$_GET['id'];
    $query="DELETE FROM honey WHERE id = ?";
    $stmt=$conn->prepare($query);
    if (!($stmt->execute([$id]))) {
        die('Erorr');
    }else {
        echo "success delete";
    }
    echo'<br> <a href="honey.php"> retren to a base page </a>';
}

?>

    <hr class="font-weight-bold">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">ADD BEE</span></h2>
<?php
if (isset($_GET['id'])) {
    include("config.php");
    $id=$_GET['id'];
    $query="DELETE FROM bee WHERE id = ?";
    $stmt=$conn->prepare($query);
    if (!($stmt->execute([$id]))) {
        die('Erorr');
    }else {
        echo "success delete";
    }
    echo'<br> <a href="bee.php"> retren to a base page </a>';
}

?>


    <hr class="font-weight-bold">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">ADD BEE</span></h2>
<?php
if (isset($_GET['id'])) {
    include("config.php");
    $id=$_GET['id'];
    $query="DELETE FROM client WHERE id = ?";
    $stmt=$conn->prepare($query);
    if (!($stmt->execute([$id]))) {
        die('Erorr');
    }else {
        echo "success delete";
    }
    echo'<br> <a href="user.php"> retren to a base page </a>';
}

?>

<?php require_once 'include/footer.php'; ?>