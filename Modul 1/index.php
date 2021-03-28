<?php

            $nama= ["Muhammad Fauzan", "Nor Hikmah", "Dzikri Ahmadillah", "Ahmad Fauzan","Aldi"];
            
            function vokal($kalimat) {
              
              $a = substr_count($kalimat, 'a');
              $i = substr_count($kalimat, 'i');
              $u = substr_count($kalimat, 'u');
              $e = substr_count($kalimat, 'e');
              $o = substr_count($kalimat, 'o');
              $A = substr_count($kalimat, 'A');
              $I = substr_count($kalimat, 'I');
              $U = substr_count($kalimat, 'U');
              $E = substr_count($kalimat, 'E');
              $O = substr_count($kalimat, 'O');
              $count = ($A+$I+$U+$E+$O+$a+$i+$u+$e+$o) ;
              return $count;
            }
            function konsonan($kalimat) {
              $jumlah = strlen($kalimat);
              $a = substr_count($kalimat, 'a');
              $i = substr_count($kalimat, 'i');
              $u = substr_count($kalimat, 'u');
              $e = substr_count($kalimat, 'e');
              $o = substr_count($kalimat, 'o');
              $A = substr_count($kalimat, 'A');
              $I = substr_count($kalimat, 'I');
              $U = substr_count($kalimat, 'U');
              $E = substr_count($kalimat, 'E');
              $O = substr_count($kalimat, 'O');
              $count = $jumlah - ($a+$i+$u+$e+$o+$A+$I+$U+$E+$O) - substr_count($kalimat, ' ');
  
              return $count;
          }
            
          function jumlahhuruf($kalimat){
            return strlen($kalimat) - substr_count($kalimat, ' ');
          }
    

         

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Praktikum PemWeb</title>
</head>
<body>
  <div>
    <p>Nama  : Muhammad Fauzan</p>
    <p>NIM   : 193020503024</p>
    <p>Kelas : A</p>
    <p>Modul : I PHP(Hypertext Preprocessor)</p>
  </div>
      <table border="1" cellpadding="10" cellspacing="1">
          <thead bgcolor="#4d94ff">
            <tr>
               <th>Nama</th>
              <th>Jumlah Huruf</th>
              <th>jumlah kata</th>
              <th>Kebalikan Nama</th>
              <th>Konsonan</th>
              <th>Vokal</th>
            </tr>
          </thead>

           <?php foreach ($nama as $nama) :  ?>

                    <tr align="center" bgcolor="#99ddff">
                        <td><?php echo $nama."<br>"; ?></td>
                        <td><?php echo jumlahhuruf($nama)."<br>"; ?></td>
                        <td><?php echo str_word_count($nama)."<br>"; ?></td>
                        <td><?php echo strrev($nama)."<br>"; ?></td>
                        <td><?= konsonan(  $nama);  ?></td>
                        <td><?= vokal( $nama);  ?></td>
                    </tr>
                      <?php endforeach; ?>
      </table>
</body>
</html>