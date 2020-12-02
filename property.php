<?php 

//class Hewan
class hewan{
  //property
  var $nama; 
  var $warna; 
  
  function __construct() {
    echo "hewan kucing";
}

  //method hewan 
  function tampilkan_nama() {
      return "Nama saya kucing";
  }

}
//instansiasi class hewan 
$hewan= New hewan();

//memanggil method tampilkan_Nama dari class manusia
echo $hewan->tampilkan_nama();
?>
