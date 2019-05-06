<?php
session_start();
//File Name: database_ex.php

$dbLocalhost = mysql_connect("localhost","root","usbw") or die("Cannot connect: ".mysql_error());

mysql_select_db('atticus',$dbLocalhost) or die("Cannot connect: ".mysql_error());

$dbRecords = mysql_query("SELECT * FROM product",$dbLocalhost) or die("Problem reading table: ".mysql_error());

$product = array();
while($record = mysql_fetch_row($dbRecords)){
    $product[$record[0]] = array('name'=>$record[1], 'small'=>$record[2], 'medium'=>$record[3], 'large'=>$record[4], 'extra'=>$record[5]);
}

$_SESSION['product'] = $product;
mysql_close($dbLocalhost);
?>