<style>
#anggota{
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
<div id="anggota">
<p align="center">&raquo;DAFTAR NAMA ANGGOTA&laquo;</p>
<?php
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "koneksi.php";
$sql="SELECT * FROM penaftaran";
$result = mysql_query($sql);
echo"<table border='1px'>";
echo"<tr id='tr'>";
echo"<td>Nama</td>";
echo"<td>jenis Kelami</td>";
echo"<td>Agama</td>";
echo"<td>Tanggal Lahir</td>";
echo"<td>Telepon</td>";
echo"<td>Email</td>";
echo"<td>Alamat</td>";
echo"</tr>";
while($row = mysql_fetch_array($resultselectpendaftaran))
{
echo "<tr>";
echo"<td>".$row['nama']."</td>";
echo"<td>".$row['jenis_kelamin']."</td>";
echo"<td>".$row['agama']."</td>";
echo"<td>".$row['tanggal_lahir']."</td>";
echo"<td>".$row['telepon']."</td>";
echo"<td>".$row['email']."</td>";
echo"<td>".$row['alamat']."</td>";
echo"</tr>";
}
echo"</table>";
?>
<a href="daftar_anggota.php">&laquo; Back</a>
</div>