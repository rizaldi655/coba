<?php 	
include('koneksi.php');
$db = new database();
$id_barang = $_GET['id'];
if(! is_null($id_barang))
{
	$data_barang = $db->delete_data($id_barang);

	header('location:tampil_data.php');
}
?>