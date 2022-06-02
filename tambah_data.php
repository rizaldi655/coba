<!DOCTYPE html>

<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title></title>

</head>

<body>

<div class="container ">
<div class="card mt-5" style="width: 25rem; margin-left:30%;">
  <div class="card-header">
  Tambah Data Barang
  </div>
  <div class="card-body">
  <form method="post" action="proses_barang.php?action=add">

<table>

<tr>
<td>Nama Barang</td>
<td>:</td>
<td><input type="text" name="nama_barang"/></td>
</tr>

<tr>
<td>Stok</td>
<td>:</td>
<td><input type="number" name="stok"/></td>
</tr>

<tr>
<td>Harga Beli</td>
<td>:</td>
<td><input type="number" name="harga_beli"/></td>
</tr>

<tr>
<td>Harga Jual</td>
<td>:</td>
<td><input type="number" name="harga_jual"/></td>
</tr>

<tr>
<td></td>
<td></td>
<td><input class = "btn btn-primary mt-4" type="submit" name="tombol" onclick="alert('data sudah terinput')" value="Simpan"/></td>
</tr>

</table>

</form>
  </div>
</div>
</div>


</body>

</html>