<?php
session_start();
include ("config.php");
$user_email = trim($_POST['email']);
$user_password = trim($_POST['password']);
$query = "SELECT * FROM users WHERE email = ? AND pass = ?";

$stmt = $conn->prepare($query);
$stmt->execute([$user_email, $user_password ]);
$user = $stmt->fetch();
$count = $stmt->rowCount();
if ($count == 1)
{
    $_SESSION['id_user'] = $user['id_user'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['name'] = $user['name'];


    $_SESSION['dashborad'] = $user['type']==1 ? true : Null;


    $user_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
    $dashborad_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/dashborad.php';

    header('Location: ' . (   $_SESSION['dashborad']      ? $dashborad_url    :      $user_url ));


}
else
{
    $variable1 = "error";
    $variable2 = "Email and password are incorrect, try again";
    $encoded_variable1 = urlencode($variable1);
    $encoded_variable2 = urlencode($variable2);
    $url = "login.php?message=" . $encoded_variable1 . "&msg=" . $encoded_variable2;
    header('Location: ' . $url);

}
?>


