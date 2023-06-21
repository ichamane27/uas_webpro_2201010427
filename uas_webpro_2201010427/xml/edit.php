<?php
	session_start();
	if(isset($_POST['edit'])){
		$users = simplexml_load_file('files/mahasiswa.xml');
		foreach($users->user as $user){
			if($user->id == $_POST['nik']){
				$user->nama = $_POST['nama'];
				$user->alamat = $_POST['tempat_lahir'];
				$user->telp = $_POST['tgl_lahir'];
				$user->tgl = $_POST['jekel'];
				$user->alamat = $_POST['alamat'];
				$user->telp = $_POST['agama'];
				$user->tgl = $_POST['status_perkawinan'];
				$user->alamat = $_POST['pekerjaan'];
				$user->telp = $_POST['kewarganegaraan'];
				$user->tgl = $_POST['status_berlaku'];
				break;
			}
		}
 
		file_put_contents('files/mahasiswa.xml', $users->asXML());
		$_SESSION['message'] = 'tb_ktp telah berhasil di Update';
		header('location: index.php');
	}
	else{
		$_SESSION['message'] = 'Pilih terlebih dahulu untuk mengedit data';
		header('location: index.php');
	}
 
?>