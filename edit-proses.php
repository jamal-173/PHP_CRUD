<?php
if (isset($_GET['id'])) {
include "config.php";
$id= $_POST['id'];
$nama= $_POST['nama'];
$kelas= $_POST['kelas'];
$jurusan= $_POST['jurusan'];

$query= "UPDATE siswa SET ";
$query .="nama = '$nama'," ;
$query .="kelas = '$kelas'," ;
$query .="jurusan = '$jurusan'";
$query .="WHERE id = '$id'";

$hasil = mysqli_query($koneksi,$query);
if (mysqli_affected_rows($koneksi) > 0){
    echo"berhasil mengupdate data";
    echo"<meta http-equiv='refresh' content='1, url=index.php'>";
}else {
    echo"gagal mendupdate data";
    echo"<meta http-equiv='refresh' content='1, url=index.php'>";
}

}else{
    header("location:index.php");
}


?>