

<?php


session_start();
if (empty($_SESSION['user_id'])) {


    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Title -->
        <title>Login</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Favicon -->
        <link rel="shortcut icon" href="back/public/img/favicon.ico">

        <!-- Template -->
        <link rel="stylesheet" href="back/public/graindashboard/css/graindashboard.css">
    </head>

    <body class="">
    <main class="main">

        <div class="content">

            <div class="container-fluid pb-5">

                <div class="row justify-content-md-center">
                    <div class="card-wrapper col-12 col-md-4 mt-5">
                        <div class="brand text-center mb-3">
                            <a href="/"><img src="back/public/img/logo.png"></a>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Login Admin</h4>
                                <form action="login_process" method="post">
                                    <div class="form-group">
                                        <label for="email">E-Mail Address</label>
                                        <input id="email" type="email" class="form-control" name="email" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password
                                        </label>
                                        <input id="password" type="password" class="form-control" name="password" required>

                                    </div>



                                    <div class="form-group no-margin">
                                        <button class="btn btn-primary py-2 px-4" type="submit"  >Login</button>
                                    </div>

                                </form>
                            </div></div></div></div>
            </div>

            <footer class="footer mt-3">
                <div class="container-fluid">
                    <div class="footer-content text-center small">

                    </div>
                </div>
            </footer>
        </div>
        </div>



        </div>

        </div>
    </main>

    <script src="back/public/graindashboard/js/graindashboard.js"></script>
    <script src=back/public/graindashboard/js/graindashboard.vendor.js"></script>
    </body>
    </html>
    <?php
}
else
{

    echo ('<p>You are logged in as ' . $_SESSION['name'] . '</p>');
    echo "<a href='logout.php'>logout</a>";
}
?>

<p class="error">
    <?php
    if(isset($_GET['msg']) && !empty($_GET['msg'])){
        echo $_GET['msg'];
    }
    ?>
</p>

