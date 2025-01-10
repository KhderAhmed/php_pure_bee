

<div class="container-fluid">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Register User</span></h2>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form bg-light p-30">
                <div id="success"></div>
                <form action="save_data" method="post">

                <div class="control-group">
                    <input type="text" class="form-control"id="name" name="name" placeholder="Your name"/>
                </div>
                    <div class="control-group">
                        <input type="text" class="form-control"id="username" name="username" placeholder="Your username"required />
                    </div>


    <div class="control-group">
        <input  class="form-control" placeholder="Your email"type="email" id="email" name="email" required/>
    </div>

    <div class="control-group">
        <input  class="form-control" placeholder="Your pwd1" type="password" id="pwd1" name="pwd1" required/>
    </div>
                    <div class="control-group">
                        <input class="form-control"placeholder="Your pwd2" type="password" id="pwd2" name="pwd2" required/>
                    </div>

                <div>
                    <button class="btn btn-primary py-2 px-4" type="submit"  name="send">Register</button>
                    <a class="return-button" href="index.php">Return to Home</a>
                    </form>
                <p class="error">
                    <?php
                    if(isset($_GET['msg']) && !empty($_GET['msg'])){
                        echo $_GET['msg'];
                    }
                    ?>
                </p>

                </div>
            </div>

        </div>
    </div>



















