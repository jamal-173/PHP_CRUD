<title>data siswa </title>
<h2>Data Siswa</h2>
<p><a href="tambah.php">Tambah</a></p>
<table>
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
    </thead>

<tbody>
<?php
// memangil file config
include "config.php";
//menyiapkan query
$query = "SELECT * FROM siswa";

$hasil = mysqli_query($koneksi,$query);
while ($data = mysqli_fetch_assoc($hasil)) {?>
    <tr>
        <td><?=$data['id']?></td>
        <td><?=$data['nama']?></td>
        <td><?=$data['kelas']?></td>
        <td><?=$data['jurusan']?></td>
    </tr>
<?php
}
?>
    
</tbody>
</table>
<style>
table{
    border-collapse:collapse;
}
td,th{
    border:1px solid black;
    padding:5px
}
th{
    background:#ccc;
}
</style>

