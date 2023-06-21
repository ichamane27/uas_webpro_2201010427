<?php
	session_start();
	if(isset($_POST['add'])){
		
		$users = simplexml_load_file('files/tb_ktp.xml');
		$user = $users->addChild('user');
		$user->addChild('nik', $_POST['nik']);
		$user->addChild('nama', $_POST['nama']);
		$user->addChild('tempat_lahir', $_POST['tempat_lahir']);
		$user->addChild('tgl_lahir', $_POST['tgl_lahir']);
		$user->addChild('jekel', $_POST['jekel']);
		$user->addChild('alamat', $_POST['alamat']);
		$user->addChild('agama', $_POST['agama']);
		$user->addChild('status_perkawinana', $_POST['status_perkawinan']);
		$user->addChild('pekerjaan', $_POST['pekerjaan']);
		$user->addChild('kewarganegaraan', $_POST['kewarganegaraan']);
		$user->addChild('status_berlaku', $_POST['status_berlaku']);
		
		$dom = new DomDocument();
		$dom->preserveWhiteSpace = false;
		$dom->formatOutput = true;
		$dom->loadXML($users->asXML());
		$dom->save('files/tb_ktp.xml');
		// Prettify / Format XML and save
 
		$_SESSION['message'] = 'tb_ktp berhasil di tambahkan';
		header('location: index.php');
	}
	else{
		$_SESSION['message'] = 'Fill up add form first';
		header('location: index.php');
	}
?>
