<?php
session_start();
$id= $_SESSION['loginid'];
$link=mysqli_connect("localhost","root","","agriworld");
$auction_id=$_GET['id'];
$a_date=date("Y-m-d");
$sql="insert into tb_apply (auction_id,loginid,date) values($auction_id,$id,'$a_date')";
mysqli_query($link,$sql);


//header("location:farmer_auction_table.php");

?>