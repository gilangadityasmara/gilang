
<?php 
include 'config.php';
$id=$_POST['id_biodata'];
$profesi=$_POST['profesi'];
$jk=$_POST['jk'];
$ttl=$_POST['ttl'];
$alamat=$_POST['alamat'];
$agama=$_POST['agama'];
$status=$_POST['status'];
$foto=$_POST['foto'];
$resume=$_POST['resume'];
$keterangan=$_POST['keterangan'];

mysqli_query($koneksi,"update biodata set profesi='$profesi', jk='$jk', ttl='$ttl', alamat='$alamat', agama='$agama', status='$status', foto='$foto', resume='$resume', keterangan='$keterangan' where id_biodata='$id'");
header("location:biodata.php");

 ?>