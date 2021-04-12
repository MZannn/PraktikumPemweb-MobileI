<?php
   $db = mysqli_connect("localhost", "root", "", "modul3");


    function query($query){
        global $db;
        $result = mysqli_query($db, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[]=$row;
        }
        return $rows;
    }


    function tambah($data){
	global $db;
	// ambil data dari tiap elemen dalam form
	$NIK = htmlspecialchars($data["NIK"]);
	$nama = htmlspecialchars($data["nama"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$id_department = htmlspecialchars($data["id_department"]);

	$query = "INSERT INTO pegawai
				VALUES
				('$NIK', '$nama', '$alamat', '$id_department')
				";
	// query insert data
	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
    }

    function ubah($data){
	global $db;
	$NIK = $data["NIK"];
	// ambil data dari tiap elemen dalam form
	$nama = htmlspecialchars($data["nama"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$id_department = htmlspecialchars($data["id_department"]);
	$query = "UPDATE pegawai SET 
				nama = '$nama', alamat ='$alamat', 
				id_department ='$id_department'
				WHERE NIK = $NIK
			";
	// query insert data
	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
	}

    function hapus($id){
        global $db;
        mysqli_query($db, "DELETE FROM pegawai WHERE NIK = $id");
        return mysqli_affected_rows($db);
    }

?>