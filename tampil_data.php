

<!DOCTYPE html>

<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title></title>

</head>

<body>
<div class="container mt-5">
    <div class="row">
        <div class="d-flex justify-content-between">

            <a class="btn btn-primary" href="tambah_data.php">Tambah Data</a>
            <div class="col-md-4">
                <div class="d-flex">
                    <form action="" method="GET" class="d-flex">
                        <input type="hidden" name="action" value="cari">
                    <input type="text" name="key" placeholder="search">
                    <button class="btn btn-primary ms-2" name="cari" type="submit">search</button>
                    </form>
                </div>
            </div>
    </div>
    <?php

include('koneksi.php');

$db = new database();

if (! isset ($_GET['cari'])){
$data_barang = $db->tampil_data();
}
else{
    $data_barang = $db->cari($_GET['key']);
}

?>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Barang</th>
            <th>Stok</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Action</th>
        </tr>
    </thead>
<?php

$no = 1;

foreach($data_barang as $row){

?>

<tbody>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $row['nama_barang']; ?></td>
<td><?php echo $row['stok']; ?></td>
<td><?php echo $row['harga_beli']; ?></td>
<td><?php echo $row['harga_jual']; ?></td>
<td>

<a class = "btn btn-warning"href="edit.php?id=<?php echo $row['id_barang']; ?>">Update</a>
<a class = "btn btn-danger" onclick="return confirm('yakin untuk menghapus?')" href="hapus.php?&id=<?php echo $row['id_barang']; ?>">Delete</a>
</td>

</tr>

<?php
}
?>
</tbody>

</table>
</div>
</div>
</body>

</html>