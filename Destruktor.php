<?php
 
//class Hewan
class hewan{
  //property
  var $nama; 
  var $warna; 
  
  //method construct di jalankan pertama kali
  function __construct() {
    echo "ikan";
  }
    
  //method destruct di jalankan terakhir
  function __destruct(){
       echo "ikan";  
      
  }
  
  //method hewan
  function tampilkan_nama(){
  return  "ikan";
  }
}

//instansiasi class hewan
$hewan =new hewan ();

//memanggil method tampilan_nama dari class hewan
echo $hewan->tampilkan_nama();
