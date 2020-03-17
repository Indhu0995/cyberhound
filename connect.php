<?php
//DB Connection
mysql_connect('localhost','trinid2p_hound','hound@123');
mysql_select_db('trinid2p_hound');
//System Error Reports Set Off
error_reporting(0);
//Starting Session as assigning user id
session_start();
$uid  = $_SESSION['uid'];
//Getting user information from DB
$getu = mysql_fetch_array(mysql_query("SELECT * FROM uaccess WHERE id='$uid'"));
?>
