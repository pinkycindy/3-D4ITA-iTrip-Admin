

<?php  
 include 'koneksi.php'; 
 $hasil         = mysql_query("SELECT wisata.idWisata, provinsi.namaProvinsi, wisata.namaWisata,wisata.deskripsiWisata, wisata.kategori, wisata.lokasiWisata, wisata.gambarWisata FROM pengguna, wisata, popular, provinsi WHERE pengguna.idUser=popular.idUser AND wisata.idWisata=popular.idWisata AND wisata.idProvinsi=provinsi.idProvinsi GROUP BY wisata.namaWisata") or die(mysql_error());
 $json_response = array();
 
if(mysql_num_rows($hasil)> 0){
 while ($row = mysql_fetch_array($hasil)) {
     $json_response[] = $row;
 }
 echo json_encode(array('listpopular' => $json_response));
} 
?>


