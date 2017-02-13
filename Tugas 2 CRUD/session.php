<?php
include ('koneksi.php');
session_start();
$user_check = session['username'];
$mysql_query = "select * from where username = '$user_check'";
$row = mysql_fetch_array(mysql_query($mysql_query));
$login_session_name = $rows['nama'];

if (! isset ($_session['username'])){
	header ("location ! index.php"));
}
?>