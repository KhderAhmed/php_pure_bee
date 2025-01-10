
<?php
require_once 'include/base.php';
include("config.php");
$id = $_GET['id'];
$query = "SELECT * FROM honey WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->execute([$id]);
$honey = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<form method="post" action="edit.php" enctype="multipart/form-data">
    <div class="control-group">
        <input class="form-control"  type="text" name="id" value="<?= $honey['id'] ?>"/>

    </div>
    <div class="control-group">
        <input type="text" class="form-control" name="name"  value="<?=  $honey['name'] ?>" required/>

    </div>
    <div class="control-group">
        <input type="text" class="form-control" name="price"   value="<?=  $honey['price'] ?>" required/>
    </div>
    <div>
        <button class="btn btn-primary py-2 px-4" type="submit"  name="edit">Edit</button>

</form>
</div>