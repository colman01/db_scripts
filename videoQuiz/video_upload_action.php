<?php
//image processing sometimes needs a bit more memory
//ini_set("memory_limit", "256M");


if ($_FILES["file"]["error"] > 0) {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
} else {
  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
}


$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['file']['name']); 

if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['file']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}


$ext = $info['extension']; // get the extension of the file
 $newname = "newname.".$ext;

//$row = exec('ls -ls',$output,$error);
//while(list(,$row) = each($output)){
//echo $row, "<BR>\n";
} 

/*
 $target = $newname;
 move_uploaded_file( $_FILES['file']['tmp_name'], $target);

move_uploaded_file($_FILES["file"]["tmp_name"],$_FILES["file"]);

move_uploaded_file($_FILES["file"]["name"],"video/" . $_FILES["file"]["name"]);



echo "              video/" . $_FILES["file"]["name"];
*/



$paramList = array(
 'videoFile1' => 'string',
 'videoFile2' => 'string',
 'videoFile3' => 'string',
 'videoFile4' => 'string'
);

//extract parameters to be global variables
foreach ($paramList as $paramName => $paramType)
    $GLOBALS[$paramName] = $_POST[$paramName];

$RANDOM_NAME_LENGTH = 16;
//$UPLOAD_DIR         = 'video';


header('Pragma: no-cache');


//require_once('IMT_imageToolkit.php');
//require_once('session_check.php');
//if (! $SID) require('errorpages/not_logged_in.php');

//$carad_id = (int)($_POST['carad_id']);


/*$errCode = $_FILES['pictureFile']['error'];
if      ($errCode == UPLOAD_ERR_OK) {}
else if ($errCode == UPLOAD_ERR_INI_SIZE || $errCode == UPLOAD_ERR_FORM_SIZE)
    require('errorpages/picturefile_too_big.php');
else if ($errCode == UPLOAD_ERR_PARTIAL)
    require('errorpages/picturefile_upload_failed.php');
else if ($errCode == UPLOAD_ERR_NO_FILE)
    require('errorpages/picturefile_missing.php');
*/

require_once('database_scripts/standard_queries.php');



//if user tries to modify the pictures of a carad which is not his own
//if ($carad['account_id'] != $_SESSION['account_id'])
//    require('errorpages/denied.php');


//check filetype
//$extension = IMT_getFileExtension($_FILES['pictureFile']['name']);
//if (! in_array($extension, array('png', 'jpg', 'gif', 'jpeg')))
//    require('errorpages/picturetype_not_allowed.php');

//create random name
$randomName = '';
for ($i = 0; $i < $RANDOM_NAME_LENGTH; $i++) {
    $rnd = rand(0, 61);
    if ($rnd < 26)
        $randomName .= chr(ord('A') + $rnd);
    else if ($rnd < 52)
        $randomName .= chr(ord('a') + $rnd - 26);
    else
        $randomName .= chr(ord('0') + $rnd - 52);
}

$targetFilename = "here.mov";
//$tmpFilename    = $_FILES['pictureFile']['tmp_name'];

//$target = 'images/'.$newname;

//move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);

 //move_uploaded_file( $_FILES["videoFile1"`]['tmp_name'], $targetFilename);



//$query = "INSERT INTO `videoQuiz`.`videoFile` (`filename`, `account_id`, `quiz_id`) VALUES  ('newData.mov', 1, 2)";
//$result = mysql_query($query, $conn);
//if (! $result)
 //   die("database error. couldn't insert picture into database: ".mysql_error());


header("HTTP/1.1 302 Moved Temporarily");
//header("Location: picture_manager.php?$SID&carad_id=$carad_id");
?>
