<html>
<body>
<form method=GET">
 <label>Nilai Angka</label>
 <input type="number" name="na" value="<?php echo $na = $_GET['na'] ?>">
 <input type="submit" value="konversi" name="konversi">
 <?php
  class convert{
   function huruf($na){
    if($na >= 90) {
     $nh = "A";
    }
    else if($na >= 85 && $na <= 89) {
     $nh = "B+";
    }
    else if($na >= 80 && $na <= 84) {
     $nh = "B";
    }
    else if($na >= 75 && $na <= 79) {
     $nh = "C+";
    }
    else if($na >= 70 && $na <= 74) {
     $nh = "C";
    }
    else if($na >= 65 && $na <= 69) {
     $nh = "D+";
    }
    else if($na >= 60 && $na <= 64) {
     $nh = "D";
    }
    else{
     $nh = "E";
    }
    return $nh;
   }
  }
  $nilai = $_GET['na'];
  if(isset($_GET['konversi'])){
   $convert = new convert();
   $huruf = $convert->huruf($nilai);
  }
 ?>
 <br><br>
 <label>Nilai Huruf </label>
 <input name="nh" value="<?php echo $huruf; ?>" readonly>

</form>
</body>
</html>