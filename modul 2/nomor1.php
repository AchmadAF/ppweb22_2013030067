<html>
<body>
<h1> Menghitung Luas & Volume Balok</h1>
<form method="get">
 <label>Panjang </label>
 <input type="text" name="panjang" value="<?php echo $_GET['panjang']; ?>" required>
 <br><br>
 <label>Lebar <label>
 <input type="text" name="lebar" value="<?php echo $_GET['lebar']; ?>" required>
 <br><br>
 <label>Tinggi <label>
 <input type="text" name="tinggi" value="<?php echo $_GET['tinggi']; ?>" required>
 <br><br>
 <input type="submit" value="Hitung" name="hitung">
 <hr>
 <?php 
  class hitung{
   function luas($p,$l,$t){
    $luas = 2*(($p * $l)+($p * $t)+($l*$t));
    return $luas;
   }
   function volume($p,$l,$t){
    $volume = $p * $l * $t;
    return $volume;
   }
  }
  
  $panjang = $_GET['panjang'];
  $lebar = $_GET['lebar'];
  $tinggi = $_GET['tinggi'];

  if(isset($_GET['hitung'])){
   $hitung = new hitung();
   $lp = $hitung->luas($panjang,$lebar,$tinggi);
   $vol = $hitung->volume($panjang,$lebar,$tinggi);
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