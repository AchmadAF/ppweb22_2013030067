<html>
<body>
<form method=GET">
 <label>Angka Input</label>
 <br>
 <input type="text" name="angka1" value="<?php echo $angka1 = $_GET['angka1'] ?>">
 <input type="text" name="angka2" value="<?php echo $angka2 = $_GET['angka2'] ?>">
 <label>=</label>
 <?php
  $angka1 = $_GET['angka1'];
  $angka2 = $_GET['angka2'];
  if(isset($_GET['plus'])){
   $calc = $angka1+$angka2;
  }
  else if(isset($_GET['kurang'])){
   $calc = $angka1-$angka2;
  }
  else if(isset($_GET['kali'])){
   $calc = $angka1*$angka2;
  }
  else if(isset($_GET['bagi'])){
   $calc = $angka1/$angka2;
  }
  else if(isset($_GET['mod'])){
   $calc = $angka1%$angka2;
  }
  else{
   $calc = 0;
  }
 ?>
 <input name="hitung" value="<?php echo $calc; ?>" readonly>
 
 <br><br>
 <label>Operator</label>
 <br>
 <input type="submit" value="+" name="plus">
 <input type="submit" value="-" name="kurang">
 <input type="submit" value="×" name="kali">
 <input type="submit" value="÷" name="bagi">
 <input type="submit" value="mod" name="mod">

</form>
</body>
</html>