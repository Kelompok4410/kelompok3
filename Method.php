<?php 

//class Hewan
class Hewan{
  //property
  var $nama; 
  var $warna; 
  
  function __construct() {
    echo "hewan burung";
}

  //method hewan
  function tampilkan_nama() {
      return "Nama saya burung";
  }

}
//instansiasi class hewan
$hewan = New hewan();

//memanggil method tampilkan_Nama dari class hewan
echo $hewan->tampilkan_nama();
?>
