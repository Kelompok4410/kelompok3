<?php 

//class Hewan
class Hewan{
  //property
  var $nama; 
  var $warna; 
  
  function __construct() {
    echo "hewan ayam";
}

  //method hewan
  function tampilkan_nama() {
      return "Nama saya Ayam";
  }

}
//instansiasi class hewan
$hewan = New hewan();

//memanggil method tampilkan_Nama dari class hewan
echo $hewan->tampilkan_nama();
?>

