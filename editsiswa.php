<?php 
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

if (!isset($_POST['kirim'])){
	exit('Access Forbiden');
}

$siswa = new siswa();
if(!copy($_FILES['in_foto']['tmp_name'],'img/'.$_POST['in_nis'].'.jpg')){
	exit('Error upload file');
}
$data['input_name'] = addcslashes($_POST['in_name']);
$data['input_email'] = $_POST['in_email'];
$data['input_nationality'] = $_POST['in_nation'];
$data['foto']= 'img/'.$_POST['in_nis'].'.jpg';





$siswa->updateSiswa($_POST['in_nis'], $data);
//print_r($_FILES);
echo "Data siswa Berhasil di update<br />";
echo "<a href='dsiswa.php?id=".$_POST['in_nis']."'>Detail Siswa</a>"
?>