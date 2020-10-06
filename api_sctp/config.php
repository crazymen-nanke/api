<?php
$conn = mysqli_connect("101.201.69.188", "imagedatabase", "imagedatabase");
mysqli_select_db($conn, "imagedatabase");
mysqli_query($conn, "set names utf8");
$website='https://api.crazymen.cn';//服务器地址
$dir='/api/sctp';//web服务器目录
