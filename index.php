<title>data siswa </title>
<h2>Data Siswa</h2>
<p><a class="tambah" href="tambah.php">Tambah</a></p>
<table>
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </thead>

<tbody>
<?php
// memangil file config
include "config.php";
//menyiapkan query
$query = "SELECT * FROM siswa";
$no=1;
$hasil = mysqli_query($koneksi,$query);
while ($data = mysqli_fetch_assoc($hasil)) {?>
    <tr>
        <td><?=$no?></td>
        <td><?=$data['nama']?></td>
        <td><?=$data['kelas']?></td>
        <td><?=$data['jurusan']?></td>
        <td>
            <a class="tombol edit" href="edit.php?id=<?=$data['id']?>">edit</a>
            <a class="tombol hapus" href="hapus.php?id=<?=$data['id']?>">hapus</a>
        </td>
    </tr>
<?php
$no++;
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
a{text-decoration:none;
    border-radius: 3px;
}
.tambah{
    background:blue;
    color:white;
    padding: 7px;
    font-weight:bold;
}
.tombol{
color:black;
padding: 3px;
font-size: 12px;;
}
.edit{
background:orange;
}
.hapus{
    background:red;
}
</style>

