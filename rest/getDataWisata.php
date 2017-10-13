

<?php  
 include 'koneksi.php'; 

$idProvinsi=$_POST['idProvinsi'];
$idKategori=$_POST['idKategori'];

 
 $hasil= mysql_query("SELECT wisata.namaWisata, wisata.lokasiWisata, provinsi.namaProvinsi FROM wisata, provinsi WHERE wisata.idProvinsi=provinsi.idProvinsi AND wisata.kategori='$idKategori' AND provinsi.namaProvinsi='$idProvinsi' ORDER BY wisata.namaWisata") or die(mysql_error());
 $json_response = array();
 
if(mysql_num_rows($hasil)> 0){
 while ($row = mysql_fetch_array($hasil)) {
     $json_response[] = $row;
 }
 echo json_encode(array('getWisata' => $json_response));
} 
?>