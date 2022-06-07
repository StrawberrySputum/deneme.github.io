<?php 
include"baglan.php";

if(isset($_GET['id']))
{
	$Sil=$db->prepare("DELETE FROM giris WHERE id=?");
	$Durum=$Sil->execute(array(intval($_GET['id'])));

	header("Location:admin.php?Durum=".$Durum);
	exit;
}
?>