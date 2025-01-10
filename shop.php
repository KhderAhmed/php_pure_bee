<?php
require_once 'include/navbar.php';
?>

<?php
include("config.php");
if (isset($_POST['send'])) {
    if (!empty($_POST['name'])&&($_POST['phone'])!= 'NULL') {
        $name=trim($_POST['name']);
        $address=trim($_POST['address']);
        $phone=trim($_POST['phone']);
        $type_produect=trim($_POST['type_produect']);

        $sql="INSERT INTO client(name,type_produect,address,phone)VALUES(?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$name,$type_produect,$address,$phone]);

        echo"successfully";}
    else {
        echo "filed";
    }
}
?>

<!-- Contact Start -->

                <h1>place input your  prosecuted you need</h1>
                <form method="post">
                    <div class="control-group">
                        <input type="text" class="form-control" name="name" placeholder="Your Name"
                               required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" name="phone" placeholder="Your phone"
                               required="required" data-validation-required-message="Please enter your phone" />
                        <p class="help-block text-danger"></p>
                    </div>

                    <div class="control-group">
                        <input type="text" class="form-control" name="address" placeholder="Your address"
                               required="required" data-validation-required-message="Please enter your address" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" name="type_produect" placeholder="Your type_produect"
                               required="required" data-validation-required-message="Please enter your type_product" />
                        <p class="help-block text-danger"></p>
                    </div>

                    <div>
                        <button class="btn btn-primary py-2 px-4" type="submit"  name="send">Send
                            Message</button>
                </form>
            </div>
        </div>

    </div>
</div>
<!-- Contact End -->


<?php

require_once 'include/footer.php';

?>


































