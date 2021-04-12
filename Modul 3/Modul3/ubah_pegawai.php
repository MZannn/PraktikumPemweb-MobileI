<?php 

require 'functionpegawai.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan ID
$pegawai = query("SELECT * FROM pegawai INNER JOIN department ON pegawai.id_department=department.id WHERE pegawai.NIK = $id")[0];
$departs = query("SELECT * FROM department");


// cek tombol submit sdh ditekan atau belum
if(isset($_POST["submit"])) {
	// cek apakah data berhasil di ubah atau tidak
	if (ubah($_POST)>0){
		echo "
				<script>
					alert('data berhasil diubah!');
					document.location.href = 'index.php';
				</script>
		";
	} else {
		echo "
		<script>
					alert('data gagal diubah!');
					document.location.href = 'index.php';
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

    <title>BAB3</title>
  </head>
  <body>

   <div class="container">
     <div class="row">
                <div class="col">
                        <h1>Ubah Data Pegawai</h1>
   

                        <a href="index.php">
                        <div class="div btn btn-primary mb-4">
                            kembali
                        </div>
                        </a>
              
                    <form action="" method="post">
                   <table>
                   <tr width="75">
                    <td width="20%">NIK</td>
                    <td width="2%"> : </td>
                    <td><input type="text" name="NIK" id="nama" required value="<?php echo $pegawai["NIK"]; ?>"></td>
                    </tr>
                   <tr>
                    <td>Nama</td>
                    <td> : </td>
                    <td><input type="text" name="nama" id="nama" required value="<?php echo $pegawai["nama"]; ?>"></td>
                    </tr>
                    <tr>
                    <td>Department</td>
                    <td> : </td>
                    <td>
                    <select name="id_department" class="form-control" id="id_department ">
                                <option  value="<?php echo $pegawai["id_department"]; ?>" selected><?php echo $pegawai["nama_depart"]; ?></option>
                                <?php foreach($departs as $depart) : ?>
                                    
                                    <option value="<?= $depart["id"] ?>"><?= $depart["nama_depart"] ?></option>
                                
                                <?php endforeach; ?>
                                </select>
                                </td>
                                </tr>
                    <tr>
                    <td>
                    <button class="btn btn-primary" type="submit" name="submit">Ubah Data</button></td></tr>
                   </table>
                       
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