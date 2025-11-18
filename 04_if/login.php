<?php
$username = $_POST['username'];
$password = $_POST['pass'];
if ((($username == "joko") && ($password == "passjoko")) ||
    (($username == "andy") && ($password == "andy2135"))) {
        echo "Login sukses";
}
else {
        echo "Login gagal";
}
?>
