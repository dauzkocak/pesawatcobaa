<style>
#edit{
background:#transparent;
border:1px solid #ccc;
margin:auto;
width:710px;
padding:4px;
border-radius:3px;
}
.tabel{
border:1px solid #ccc;
}
#tr{
border:1px solid #ccc;
background:#444;
color:fff;
padding:12px;
text-align:center;
}
</style>
<?php
include “koneksi.php”;
if ($_POST[‘act’]==”update”){
$sql_edit=”UPDATE pendaftaran SET
“.”nama='”.$_POST[‘nama’].”‘,
“.”jenis_kelamin='”.$_POST[‘jk’].”‘,
“.”agama='”.$_POST[‘agama’].”‘,
“.”tanggal_lahir='”.$_POST[‘tgl_lahir’].”‘,
“.”telepon='”.$_POST[‘telepon’].”‘,
“.”email='”.$_POST[’email’].”‘,
“.”alamat='”.$_POST[‘alamat’].”‘
“.”WHERE id_news='”.$_POST[‘id’].”‘ “;
@mysql_query($sql_edit);
echo'<script>window.location=”daftar_anggota.php”</script>’;
}
if (!empty($_GET[‘id’])){
$rs=@mysql_query(“SELECT * FROM pendaftaran WHERE id_news='”.$_GET[‘id’].”‘”);
$row=@mysql_fetch_array($rs);
?>
<div id=”edit”>
<table class=’tabel’>
<form method=”post” enctype=”multipart/form-data”>
<tr><td>Nama :</td><td><input type=”text” name=”nama” class=”texbox” size=”25px” value= <?php echo $row[‘nama’] ?> ></td></tr>
<tr><td>Jenis Kelamin :</td><td><input type=”text” name=”jk” class=”texbox” size=”25px” value= <?php echo $row[‘jenis_kelamin’] ?> ></td></tr>
<tr><td>Agama :</td><td><input type=”text” name=”agama” class=”texbox” size=”25px” value= <?php echo $row[‘agama’] ?> ></td></tr>
<tr><td>Tanggal Lahir :</td><td><input type=”text” name=”tgl_lahir” class=”texbox” size=”25px” value= <?php echo $row[‘tanggal_lahir’] ?> ></td></tr>
<tr><td>Telepon :</td><td><input type=”text” name=”telepona” class=”texbox” size=”25px” value= <?php echo $row[‘telepon’] ?> ></td></tr>
<tr><td>Email :</td><td><input type=”text” name=”email” class=”texbox” size=”25px” value= <?php echo $row[’email’] ?> ></td></tr>
<tr><td>Alamat:</td><td><input type=”text” name=”alamat” class=”texbox” size=”25px” value= <?php echo $row[‘alamat’] ?> ></td></tr>
<a href=”daftar_anggota.php”>&laquo;Back</a>
<input type=”submit” value=”HAPUS POST” class=”btn”>
<input type=”hidden” name=”act” value=”delete” >
<?php echo'<input type=”hidden” name=”id” value=”‘.$row[‘id’].'”>’;?>
</form>
</table>
<?php
}
?>
</div>