<?php

$con = mysqli_init();
if (!$con) {
    die(mysqli_error($con));
}

$ssl_ca_path = "/etc/ssl/certs/global-bundle.pem";
$con->ssl_set(NULL, NULL, $ssl_ca_path, NULL, NULL);
$con->options(MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);

$db_host = "$DB_ENDPOINT";
$db_user = "$DB_USER";
$db_pass = '$DB_PASS';
$db_name = "$DB_NAME";
if (!$con->real_connect($db_host, $db_user, $db_pass, $db_name)) {
    die(mysqli_error($con));
}

?>