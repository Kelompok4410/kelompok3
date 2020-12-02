<?php

//class hewan
class hewan{
  //menentukan property dengan private
  private $nama = "hewan angsa";
  
  //method publik
  public function tampilkan_nama() {
     return "hewan angsar" .$this->nama;
     
  }
     
     
     
}
//instansiasi class hewan();
$hewan = new hewan() ;

//memanggil method public tampilkan_nama dari class hewan
echo $hewan->tampilkan_nama();
