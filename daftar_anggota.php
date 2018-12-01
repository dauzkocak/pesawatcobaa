<style>
#daftar{
background:#transparent;
border:1px solid #ccc;
margin:auto;
width:400px;
padding:4px;
border-radius:3px;
}
.texbox{
border:1px solid #ccc;
height:25px;
}
.texarea{
border:1px solid #ccc;
}
.btn{
width:85px;
height:30px;
color:#099;
font-weight:bold;
margin-bottom:3px;
}
.btn:hover{
background:#333;
color:#fff;
font-weight:bold;
cursor:pointer;
border:2px solid #099;
border-radius:4px;
}
</style>
<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "koneksi.php";
if ($_POST['act']=="add"){
$sql_add="INSERT INTO penaftaran (nama,jenis_kelamin,agama,tanggal_lahir,telepon,email,alamat) VALUES ("
."'".$_POST['nama']."',
'".$_POST['jk']."',
'".$_POST['agama']."',
'".$_POST['tgl_lahir']."',
'".$_POST['telepon']."',
'".$_POST['email']."',
'".$_POST['alamat']."') ";
@mysql_query($sql_add);
echo'<script>alert("Data Berhasil Disimpan");window.location ="tampil_anggota.php";</script>';
}
?>
<div id="daftar">
<p align="center">&raquo;FORM PENDAFTARAN ANGGOTA&laquo;</p>
<table border="0px">
<form method="post" enctype="multipart/form-data">
<tr><td>Nama Lengkap</td> <td>:</td> <td><input name="nama" size="25" class="texbox"></td></tr>
<tr><td>Jenis Kelamin</td><td>:</td><td><select name="jk" class="texbox" value="<?php $_POST['jk']?>">
<option value="pilih">--Pilih--</option>
<option value="Laki-laki">Laki-laki</option>
<option value="Perempuan">Perempuan</option>
</select></td></tr>
<tr><td>Agama</td><td>:</td><td><select name="agama" class="texbox" value="<?php $_POST['agama']?>>
<option value="pilih">--Pilih--</option>
<option value="pilih">--Pilih--</option>
<option value="Islam">Islam</option>
<option value="kristen">Kristen</option>
<option value="Hindu">Hindu</option>
<option value="buddha">Buddha</option>
</select></td></tr>
<tr><td>Tanggal Lahir</td> <td>:</td><td><input name="tgl_lahir" size="25" class="texbox"></td></tr>
<tr><td>Telepon</td> <td>:</td><td><input name="telepon" size="25" class="texbox"></td></tr>
<tr><td>Email</td> <td>:</td><td><input name="email" size="25" class="texbox"></td></tr>
<tr><td>Alamat</td> <td>:</td><td><textarea name="alamat" cols="25" rows="3" class="texarea"></textarea></td></tr>
<tr><td><input type="submit" value="Simpan" class="btn">
<input type="hidden" name="act" value="add"></td></tr>
</table>
</form>
</div>