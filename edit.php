<?php
 if (isset($_GET['id'])) {
include "config.php";
$id= $_GET['id'];
$query= "SELECT * FROM siswa WHERE id='$id'";
$hasil = mysqli_query($koneksi,$query);
$data= mysqli_fetch_assoc($hasil);
?>


<title>tambah siswa</title>
<form action="edit-proses.php" method="post">
    <fieldset>
        <legend> >-EDIT_SISWA-< </legend>
        <input type="text" name="id" id="id" value="<?=$data['id']?>" hidden>
        <p>Nama</p>
        <input type="text" name="nama" id="nama" value="<?=$data['nama']?>">
        
        <p>Kelas</p>
        <select name="kelas" id="kelas" required>
            <option value="">->PILIH KELAS<-</option>
        <option value="10" <?php if ($data['kelas']=="10")echo "selected" ?> >10</option>
        <option value="11" <?php if ($data['kelas']=="11")echo "selected" ?> >11</option>
        <option value="12" <?php if ($data['kelas']=="12")echo "selected" ?> >12</option>
        </select>
        
        <?php
        if ($data['jurusan']=="PPLG"){
            $pplg= "checked";
            $akl= "";
        }else{
            $pplg= "";
            $akl= "checked";
        }
        ?>
        <p>Jurusan</p>
        <input type="radio" name="jurusan" id="jurusan" value="PPLG" <?=$pplg?> >PPLG
        <input type="radio" name="jurusan" id="jurusan" value="AKL"  <?=$akl?> >AKL
        <p> 
            <input type="submit" value="simpan">
            <input type="reset" value="Reset">
        </p>

       
    </fieldset>
</form>
<?php
}else{
    header("location:index.php");
}
?>