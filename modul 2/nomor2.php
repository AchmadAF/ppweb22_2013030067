<html>
<body>
<h1> Menghitung Luas & Volume Bola</h1>
<form method="get">
 <label>Jari-Jari </label>
 <input type="text" name="jari" value="<?php echo $_GET['jari']; ?>" required>
 <br><br>
 <input type="submit" value="Hitung" name="hitung">
 <hr>
 <?php 
  class hitung{
   public $pi = 3.14;
   function luas($r){
    $luas = 4 * $this->pi * $r * $r;
    return $luas;
   }
   function volume($r){
    $volume = 4/3 * $this->pi * $r * $r * $r;
    return $volume;
   }
  }
  
  $jari = $_GET['jari'];

  if(isset($_GET['hitung'])){
   $hitung = new hitung();
   $lp = $hitung->luas($jari);
   $vol = $hitung->volume($jari);
   echo "<h3>Volume : ".$vol."</h3>";
   echo "<h3>Luas Permukaan : ".$lp."</h3><br>";
  }
  else{
   echo "<h3>Volume : ".$vol."</h3>";
   echo "<h3>Luas Permukaan : ".$lp."</h3><br>";
  }
 ?>
</form>

</body>
</html>