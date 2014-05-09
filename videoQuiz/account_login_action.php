<?php
header('Pragma: no-cache');

require_once('database_scripts/database.php');
select_database();

$paramList = array(
 'username' ,
 'password'
);


//extract parameters to be global variables
foreach ($paramList as $param)
    $GLOBALS[$param] = $_POST[$param];


//validity checks for input data

//email
/*if (! preg_match("/^[A-Za-z0-9._%-]+@[A-Za-z0-9._%-]+\.[A-Za-z]{2,4}$/", $username)) {
$inputError = TRUE;
$usernameMsg = "Please fill in the username you used to register an ".
"account at this website.";
}*/

//password
if (strlen($password) < 4) {
    $inputError = TRUE;
    $passwordMsg = "The password must have at least 4 characters.";
}

if ($inputError) {
    require('account_login_form.php');
    exit;
}




//mysqlify parameters
foreach ($paramList as $param)
    $GLOBALS[$param.'Sql'] = mysql_real_escape_string($GLOBALS[$param]);


echo "Here in the action script '$usernameSql'";

//$query = "SELECT * FROM accounts WHERE username='$usernameSql'";
//$query = "SELECT * FROM accounts LIMIT 0,1";

//SELECT *
//FROM `accounts`
//ORDER BY `accounts`.`username` ASC
//LIMIT 0 , 30

/*
SELECT *
FROM accounts
WHERE username = 'g'
LIMIT 0 , 30
*/

$query = "SELECT * FROM `videoQuiz`.`accounts` WHERE username = '$usernameSql' LIMIT 0 , 30";


$result = mysql_query($query, $conn);
if (! $result)
    die("couldn't query database to authenticate you: ".mysql_error());

$row = mysql_fetch_assoc($result);
mysql_free_result($result);


if (! $row) {
    $usernameMsg = "The email address $username isn't registered at this website.";
    require('account_login_form.php');
    exit;
}


if ($row['password'] != $password) {
    $passwordMsg = "Wrong password. Please try again.";
    require('account_login_form.php');
    exit;
}


startAccountSession($row['account_id']);




header("HTTP/1.1 302 Moved Temporarily");
header("Location: phpinfo.php?$SID");
?>
