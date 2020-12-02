<?php
   
   //class parent
   class hewan{
     
     //property class hewa 
     public $nama_saya;
     
     //method pada class hewan
     function berinama($saya) {
       $this->nama_saya=$saya;
     }
   
}

//class turunan atau sub class dari class hewan
//kita menghubungkan class dengan syntax extends
class teman extends hewan {
  
  //property class teman
  public $nama_teman;
  
  //method pada class teman
  function berinama($teman) {
    $this->nama_teman=$teman;
  }
  
}

//instansiasi class teman
$malasngoding = new teman;

//method beri nama adalah method pada class hewan, tapi kita bisa mengubahnya
$malasngoding->berinama (" PULUNG CODING ");
$malasngiding->berinamateman (" Hewan ");

//menampilkan isi property
echo "Nama Saya :" . $malasngoding->nama_saya . "<br/>";
echo "Nama Teman Saya : " . $malasngoding->nama_teman;
