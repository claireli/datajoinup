<?php
include("connect.php");
$target_dir = "members/";
$target_file = $target_dir . substr($_POST['user_file'], 0, 6) . basename($_FILES["fileToUpload"]["name"]);
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
	// TODO: DELETE EXISTING FILE!!!
    echo "Sorry, file already exists.";
	unlink($target_file);
    //$uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		

    } else {
        echo "Sorry, there was an error uploading your file.";

    }
}

//UPDATE Users SET weight = 160, desiredWeight = 145 WHERE id = 1;
$sql="UPDATE `DJU`.`dju_profile` SET `profile_pic` = '" .$target_file. "' WHERE profile_id = '".$_POST['user_file']."';";
	
//$sql="INSERT INTO `dju`.`dju_profile` (`profile_pic`) VALUES ('".$target_file."');";

if ($conn->query($sql) === TRUE) {
    echo "New S_TITLE record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "Set as profile photo for user: " . $_POST['user_file'];


// TO DO: Write get parameter for delivering an error message
header('Location: welcome.php');

?>