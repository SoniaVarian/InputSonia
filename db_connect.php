<?php
$host='localhost'; // nama host server kita, biasanya bernama localhost
$database='dbinput_sonia'; // database mysql yang kita gunakan
$username='root';//username database kita, saya pake username:root
$password='';//password akses database, saya pake password:root
$koneksi=mysql_connect($host,$username,$password) or
die("Tidak dapat konek ke databse");
mysql_select_db($database,$koneksi) or
die("Tidak dapat meimilih database");
?>