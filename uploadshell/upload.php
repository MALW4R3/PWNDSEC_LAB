<?php
if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"uploads/".$_FILES["fileToUpload"]["name"]))
{
	echo "อัพโหลดไฟล์สำเร็จ ไฟล์อยู่ที่ /uploads";
}
else {	
	echo "ERROR";
	header("location: index.php");

}

?>

