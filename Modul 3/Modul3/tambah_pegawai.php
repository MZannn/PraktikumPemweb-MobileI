<?php 

require 'functionpegawai.php';

 $departs = query("SELECT * FROM department");

// cek tombol submit sdh ditekan atau belum
if(isset($_POST["submit"])) {
	// cek apakah data berhasil di tambahkan atau tidak
	if (tambah($_POST)>0){
		echo "
				<script>
					alert('data berhasil ditambahkan!');
					document.location.href = 'tambah_pegawai.php';
				</script>
		";
	} else {
		echo "
		<script>
					alert('data gagal ditambahkan!');
					document.location.href = 'tambah_pegawai.php';
				</script>
		";
	}


}
	
	
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Modul3</title>
  </head>
  <body>

   <div class="container">
     <div class="row">
                <div class="col">
                        <h1>Tambah Data Employe</h1>
   

                        <a href="index.php">
                        <div class="div btn btn-primary mb-4">
                            kembali
                        </div>
                        </a>
              
                    <form action="" method="post">
                    <table width="75%">
                    <tr colspan="4">
                    <td width="20%">NIK</td>
                    <td width="2%"> : </td>
                    <td><input type="text" name="NIK" id="NIK" placeholder="Masukkan NIK" required></td>
                    </tr>
                    <tr>
                    <td>Nama</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" required>
                    </td>
                    </tr>
                    <tr>
                    <td>Alamat</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="alamat" id="nama" placeholder="Masukkan Alamat" required>
                    </td>
                    </tr>
                    <tr>
                    <td>ID Department</td>
                    <td></td>
                    <td><select name="id_department" class="form-control" id="id_department ">
                                <option selected>Pilih Salah Satu</option>
                                <?php foreach($departs as $depart) : ?>
                                    
                                    <option value="<?= $depart["id"] ?>"><?= $depart["nama_depart"] ?></option>
                                
                                <?php endforeach; ?>
                                </select></td>
                    </tr>
                    <tr>
                    <td rowspan="2"><button type="submit" name="submit" class="btn btn-primary mb-4">Tambah data</button></td>
                    
                    </tr>
                    
                    </table>
                    
                       
                    </form>

                                </div>
                    </div>
                </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>