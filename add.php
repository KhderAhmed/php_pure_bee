
<?php require_once 'include/base.php';?>
<?php
include("config.php");
if (isset($_POST['add'])) {
    if (!empty($_POST['name'])&&($_POST['price'])!= 'NULL') {
        $name=trim($_POST['name']);
        $price=trim($_POST['price']);
        $target_dir = "images\\";
        $target_file = $target_dir . basename($_FILES["input"]["name"]);
        move_uploaded_file($_FILES["input"]["tmp_name"], $target_file);

        $sql="INSERT INTO honey(name,price,img)VALUES(?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute( [$name,$price,$target_file]);

        echo"successfully";}
    else {
        echo "filed";
    }
}
?>
<div class="container-fluid">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3"></span>HONEY</h2>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form bg-light p-30">
                <div id="success"></div>
<form method="post" enctype="multipart/form-data">
                <div class="control-group">
                    <input type="text" class="form-control" name="name" placeholder="Your name"/>

                    <p class="help-block text-danger"></p>
                </div>

                <div class="control-group">
                    <input type="text" class="form-control" name="price" placeholder="Your price"/>

                    <p class="help-block text-danger"></p>
                </div>

                <div class="control-group">
                    <input type="file" class="form-control" name="input"  accept="image/aces/*" required>

                    <p class="help-block text-danger"></p>
                </div>
                <div>
                    <div>
                        <button class="btn btn-primary py-2 px-4" type="submit"  name="add">ADD</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
<hr class="font-weight-bold">

<?php
include("config.php");
if (isset($_POST['save'])) {
    if (!empty($_POST['description'])&&($_POST['type_f'])!= 'NULL') {
        $price=trim($_POST['price']);
        $type=trim($_POST['type_f']);
        $description=trim($_POST['description']);
        $country =trim($_POST['country']);
        $target_dir = "images\\";
        $target_file = $target_dir . basename($_FILES["pol"]["name"]);
        move_uploaded_file($_FILES["pol"]["tmp_name"], $target_file);

        $sql="INSERT INTO queen(type_f,price,description,country,imging )VALUES(?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$type,$price,$description,$country,$target_file]);

        echo"successfully";}
    else {
        echo "filed";
    }
}
?>
<div class="container-fluid">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3"></span>QUEEN</h2>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form bg-light p-30">
                <div id="success"></div>
                <form method="post" enctype="multipart/form-data">
                    <div class="control-group">
                        <input type="text" class="form-control" name="type_f" placeholder="Your type"/>

                    </div>

                    <div class="control-group">
                        <input type="text" class="form-control" name="country" placeholder="Your country"/>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" name="description" placeholder="Your description"/>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" name="price" placeholder="Your price"/>
                    </div>


                    <div class="control-group">
                        <input type="file" class="form-control" name="pol"  accept="image/aces/*" required>
                    </div>
                    <div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit"  name="save">ADD</button>
                </form>
            </div>
        </div>

    </div>
</div>
<hr class="font-weight-bold">


<?php
include("config.php");
if (isset($_POST['save'])) {
    if (!empty($_POST['kind'])&&($_POST['price'])!= 'NULL') {
        $kind=trim($_POST['kind']);
        $price=trim($_POST['price']);
        $target_dir = "images\\";
        $target_file = $target_dir . basename($_FILES["poli"]["name"]);
        move_uploaded_file($_FILES["poli"]["tmp_name"], $target_file);

        $sql="INSERT INTO bee(kind,pricee,imge)VALUES(?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute( [$kind,$price,$target_file]);

        echo"successfully";}
    else {
        echo "filed";
    }
}
?>
<div class="container-fluid">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3"></span>BEE</h2>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form bg-light p-30">
                <div id="success"></div>
                <form method="post" enctype="multipart/form-data">
                    <div class="control-group">
                        <input type="text" class="form-control" name="kind" placeholder="Your kind"/>

                    <div class="control-group">
                        <input type="text" class="form-control" name="price" placeholder="Your price"/>
                    </div>


                    <div class="control-group">
                        <input type="file" class="form-control" name="poli"  accept="image/aces/*" required>
                    </div>
                    <div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit"  name="save">ADD</button>
                </form>
            </div>
        </div>

    </div>
</div>
<hr class="font-weight-bold">

<?php require_once 'include/footer.php';?>