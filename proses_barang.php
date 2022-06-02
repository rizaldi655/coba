<?php

include('koneksi.php');

$koneksi = new database();

$action = $_GET['action'];

if($action == "add")

{

$koneksi->tambah_data($_POST['nama_barang'],$_POST['stok'],$_POST['harga_beli'],$_POST['harga_jual']);

header('location:tampil_data.php');

}

elseif($action=="update")

{

$koneksi->update_data($_POST['nama_barang'],$_POST['stok'],$_POST['harga_beli'],$_POST['harga_jual'],$_POST['id_barang']);

header('location:tampil_data.php');

}
elseif($action == "cari")
{
    
    function data(){
        $koneksi = '';
        if (! isset ($_GET['cari'])){
    $data = mysqli_query($koneksi,"select * from tb_barang");
    }
    else {
        $data = mysqli_query($koneksi, "select * from tb_barang where nama like '%".$_GET['key']."%'");
    }
    while($row = mysqli_fetch_array($data)){
    
    $hasil[] = $row;
    
    }
    
    return $hasil;
    }
    
    
    header('location:tampil_data.php');
}


?>