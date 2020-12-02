<?php 

//class Hewan
class Hewan{
  //property
  var $nama; 
  var $warna; 
  
  function __construct() {
    echo "hewan kadal";
}

  //method hewan
  function tampilkan_nama() {
      return "Nama saya kadal";
  }

}
//instansiasi class hewan
$hewan = New hewan();

//memanggil method tampilkan_Nama dari class hewan
echo $hewan->tampilkan_nama();
?>
