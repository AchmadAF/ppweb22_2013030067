<?php
 class mtk{
  public $pi = 3.14;
  function tambah($a,$b){
   $c = $a + $b;
   return $c;
  }
  function kdr($r){
   return $x * $x;
  }
  function luas($r){
    $l = $this->pi * $r * $r;
    return $l;
  }
  function kel($r){
    $k = 2 * $this->pi * $r;
    return $k;
  }
 }
 
 $mtk = new mtk();
 $r = 10;
 
 $kel = $mtk->kel($r);
 $luas = $mtk->luas($r);
 
 echo "Menghitung Keliling dan Luas Lingkaran<br>";
 echo "Jari­-Jari : ".$r."<br>";
 echo "Keliling = ".$kel."<br>";
 echo "Luas = ".$luas;
?>