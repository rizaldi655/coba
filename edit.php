<?php 	
include('koneksi.php');
$db = new database();
$id_barang = $_GET['id'];
if(! is_null($id_barang))
{
	$data_barang = $db->get_by_id($id_barang);
}
else
{
	header('location:tampil_data.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title></title>
</head>
<body>
<div class="container">
<div class="card mt-4" style="width: 25rem; margin-left:30%;">
  <h5 class="card-header">Update Data Barang</h5>
  <div class="card-body">
  <form method="post" action="proses_barang.php?action=update">
<input type="hidden" name="id_barang" value="<?php echo $data_barang['id_barang']; ?>"/>
<table>
	<tr>
		<td>Nama Barang</td>
		<td>:</td>
		<td><input type="text" name="nama_barang" value="<?php echo $data_barang['nama_barang']; ?>"/></td>
	</tr>
	<tr>
		<td>Stok</td>
		<td>:</td>
		<td><input type="text" name="stok" value="<?php echo $data_barang['stok']; ?>"/></td>
	</tr>
	<tr>
		<td>Harga Beli</td>
		<td>:</td>
		<td><input type="text" name="harga_beli" value="<?php echo $data_barang['harga_beli']; ?>"/></td>
	</tr>
	<tr>
		<td>Harga Jual</td>
		<td>:</td>
		<td><input type="text" name="harga_jual" value="<?php echo $data_barang['harga_jual']; ?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input class = "btn btn-warning"type="submit" name="tombol"onclick="return confirm('yakin untuk mengupdate data?')" value="Update"/></td>
	</tr>
</table>
</form>
  </div>
</div>
</div>

</body>
</html>