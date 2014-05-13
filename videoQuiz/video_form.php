<?php
//image processing sometimes needs a bit more memory
echo ini_get("memory_limit")."\n";
echo ini_get("post_max_size")."\n";
ini_set('post_max_size', '64M');
ini_set('upload_max_filesize', '64M');
ini_set("memory_limit","256M");
echo ini_get("post_max_size")."\n";
echo ini_get("memory_limit")."\n";

//upload_max_filesize "2M" PHP_INI_PERDIR

//ini_set('memory_limit', '256M');
//echo "Loaded";


if ($_FILES["file1"]["error"] > 0) {
  echo "Error: " . $_FILES["file1"]["error"] . "<br>";
} else {
  echo "Upload: " . $_FILES["file1"]["name"] . "<br>";
  echo "Type: " . $_FILES["file1"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file1"]["size"] / 1024) . " kB<br>";
  echo "Stored in: " . $_FILES["file1"]["tmp_name"];
}

$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['file']['name']); 

if(move_uploaded_file($_FILES['file1']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['file1']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}

if ($_FILES["file2"]["error"] > 0) {
  echo "Error: " . $_FILES["file2"]["error"] . "<br>";
} else {
  echo "Upload: " . $_FILES["file2"]["name"] . "<br>";
  echo "Type: " . $_FILES["file2"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file2"]["size"] / 1024) . " kB<br>";
  echo "Stored in: " . $_FILES["file2"]["tmp_name"];
}
$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['file']['name']); 

if(move_uploaded_file($_FILES['file2']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['file2']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}

if ($_FILES["file"]["error"] > 0) {
  echo "Error: " . $_FILES["file3"]["error"] . "<br>";
} else {
  echo "Upload: " . $_FILES["file3"]["name"] . "<br>";
  echo "Type: " . $_FILES["file3"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file3"]["size"] / 1024) . " kB<br>";
  echo "Stored in: " . $_FILES["file3"]["tmp_name"];
}
$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['file3']['name']); 

if(move_uploaded_file($_FILES['file3']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['fil3']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}

if ($_FILES["file"]["error"] > 0) {
  echo "Error: " . $_FILES["file4"]["error"] . "<br>";
} else {
  echo "Upload: " . $_FILES["file4"]["name"] . "<br>";
  echo "Type: " . $_FILES["file4"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file4"]["size"] / 1024) . " kB<br>";
  echo "Stored in: " . $_FILES["file4"]["tmp_name"];
}
$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['file4']['name']); 

if(move_uploaded_file($_FILES['file4']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['file4']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}


if ($_FILES["file"]["error"] > 0) {
  echo "Error: " . $_FILES["file5"]["error"] . "<br>";
} else {
  echo "Upload: " . $_FILES["file5"]["name"] . "<br>";
  echo "Type: " . $_FILES["file5"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file5"]["size"] / 1024) . " kB<br>";
  echo "Stored in: " . $_FILES["file5"]["tmp_name"];
}
$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['file5']['name']); 

if(move_uploaded_file($_FILES['file5']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['file5']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}



/*
//$row = exec('ls -ls',$output,$error);
//while(list(,$row) = each($output)){
//echo $row, "<BR>\n";
} 



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



*/

header("HTTP/1.1 302 Moved Temporarily");
?>
