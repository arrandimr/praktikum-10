<?php
$host="localhost"; 
$database="praktikum10";
$username="root"; 
$password=""; 

$conn = mysqli_connect($host,$username,$password,$database);
$sql = "insert into daftarmhs (nisn, nama, email, tglregis, no_telp, jeniskel, nik, tempat_lahir, tgl_lahir, no_akta, kewarganegaraan, agama, anak, kebutuhan_khusus, alamat, rt, rw, dusun, desa, kecamatan, kdpos, kepemilikan, transport, no_kks, kps, no_kps) values ('".$nisn."', '".$nama."','".$email."','".$tanggal."','".$telp."','".$jeniskel."', '".$nik."','".$temlahir."','".$tgllahir."','".$akta."','".$kwn."', '".$agama."','".$anak."','".$kkhusus."','".$alamat."','".$rt."', '".$rw."','".$dusun."','".$desa."','".$kecamatan."','".$kdpos."', '".$kepemilikan."','".$transport."','".$kks."','".$kps."','".$nokps."')";

if (mysqli_query($conn, $sql)){} 
else {
	echo "Error : ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>

