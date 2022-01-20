<?php
include 'config.php';

function upload(){
	
	if ($_FILES && $_FILES['filename']['error'] == UPLOAD_ERR_OK && ! empty($_FILES) && file_exists(FILES_PATH)) {
		$uploads_dir = FILES_PATH;
		$tmp_name = $_FILES['filename']['tmp_name'];
		$name = $_FILES['filename']['name'];
		
		if ((substr(sprintf('%o', fileperms($uploads_dir)), -4)) != '0777' ) {
			return "No rights for upload in this directory";
		} elseif (is_file($uploads_dir.DS.$name) && file_exists($uploads_dir.DS.$name)) {
			$exist_file = "Such file exists"; 
			return $exist_file;
		} elseif ($_FILES['filename']['size'] > 2000000) {
			$exceed_file = "Such file exceed 2 Mb"; 
			return $exceed_file;
		} else {
			move_uploaded_file($tmp_name, $uploads_dir.DS.$name); 
			$upload_file =  "Файл " . $_FILES['filename']['name'] . " загружен"; 
			return $upload_file;
			
		}
	} else {
		return "No such dir " . FILES_PATH;
	}
	
}
function del() {
	if (file_exists($_POST['delete'])) {
		unlink($_POST['delete']);
		return "File was deleted";
	} else { 
		return false;
	}
}
function files_to_list() {
		$files_in_array = array_slice(scandir(FILES_PATH), 2);
		$res = [];
		foreach ($files_in_array as $key => $value) {
			$res[$key] = bites_to_kilobites(filesize(FILES_PATH.DS.$value));
		}
		$combine = array_combine($files_in_array, $res);
		return $combine;
}
function bites_to_kilobites($bites) {
	return (int) ($bites / 10);

}


if (isset($_POST)) {
	if(isset($_POST['upload'])) {	
        $upload = upload(); 
        
	}
	if(isset($_POST['delete'])) {
		$delete = del(FILES_PATH.DS);
	}
	
	
	if (file_exists(FILES_PATH) && (substr(sprintf('%o', fileperms(FILES_PATH)), -4)) == '0777') {
	$result = files_to_list();
	} else {
		$result = false;
	}
}
header('Location: /');
?>
	