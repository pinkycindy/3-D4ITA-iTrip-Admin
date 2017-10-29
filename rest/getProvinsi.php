<?php
 $objConnect = mysql_connect("localhost","root","");
 $objDB = mysql_select_db("db_itrip");
 $selectedPulau = $_POST["idPulau"];

 $idPulau = 0;

 if($selectedPulau == "idSumatera"){
   $idPulau = 1;
 }else if($selectedPulau == "idJawa"){
   $idPulau = 2;
 }else if($selectedPulau == "idKalimantan"){
   $idPulau = 3;
 }else if($selectedPulau == "idSulawesi"){
   $idPulau = 4;
 }else if($selectedPulau == "idPapua"){
   $idPulau = 5;
 }

 $strSQL = "SELECT namaProvinsi FROM provinsi WHERE idPulau=$idPulau";
 $objQuery = mysql_query($strSQL);
 $intNumField = mysql_num_fields($objQuery);
 $resultArray = array();
 while($obResult = mysql_fetch_array($objQuery))
 {
 $arrCol = array();
 for($i=0;$i<$intNumField;$i++)
 {
 $arrCol[mysql_field_name($objQuery,$i)] = $obResult[$i];
 }
 array_push($resultArray,$arrCol);
 }

mysql_close($objConnect);

echo json_encode(array('getProvinsi' => $resultArray));
?>
