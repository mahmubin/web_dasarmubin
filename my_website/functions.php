<?php
date_default_timezone_set("Asia/jakarta");
function koneksi()
{
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "web_dasar_b1_2109010050_mahmubin haibah";
    return mysqli_connect(
    $server,
    $username,
    $password,
    $database
    );

}
function spesialis (){
    return mysqli_query(
        koneksi(),
        "SELECT * FROM spesialis"
    );
}
