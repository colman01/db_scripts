<?php
//header('Pragma: no-cache');

//require_once('session_check.php');
//if ($SID) require('errorpages/already_registered.php');

require_once('database_scripts/database.php');
select_database();


$paramList = array(
 'username'        => 'string',
 'email'           => 'string',
 'password'        => 'string',
 'password_rep'    => 'string'
);


//extract parameters to be global variables
foreach ($paramList as $paramName => $paramType)
    $GLOBALS[$paramName] = $_POST[$paramName];


$query = "SELECT * FROM `videoQuiz`.`accounts` WHERE username = '$usernameSql' LIMIT 0 , 30";


$result = mysql_query($query, $conn);
if (! $result)
    die("couldn't query database to authenticate you: ".mysql_error());

/*
//validity checks for input data

//email
if (! preg_match("/^[A-Za-z0-9._%-]+@[A-Za-z0-9._%-]+\.[A-Za-z]{2,4}$/", $email)) {
    $inputError = TRUE;
    $emailMsg = "Please fill in a valid, working email address.";
}

//password
if (strlen($password) < 4) {
    $inputError = TRUE;
    $passwordMsg = "The password must have at least 4 characters.";
}

//password_rep
if ($password_rep != $password) {
    $inputError = TRUE;
    $password_repMsg = "The password and the repeated password must be equal.";
}

//username
if (strlen($username) == 0) {
    $inputError = TRUE;
    $lastnameMsg = "Please fill in your Nickname.";
}

//address, city, and phone remain unchecked

if ($inputError) {
    require('account_register_form.php');
    exit;
}


//require_once('database_scripts/autoopen_database.php');

//mysqlify parameters
//if ($isEmailPublic != 'yes')
//   unset($isEmailPublic);


foreach ($paramList as $paramName => $paramType) {
    if ($paramType == 'string')
        $GLOBALS[$paramName.'Sql'] = "'".mysql_real_escape_string($GLOBALS[$paramName])."'";
    else if ($paramType == 'bool')
        $GLOBALS[$paramName.'Sql'] = isset($GLOBALS[$paramName]) ? 1 : 0;
    else
        eval("\$$paramName"."Sql = ($paramType)(\$$paramName);");
}


//check if email is already present
//query = "SELECT count(*) as occurences FROM accounts WHERE email='$emailSql'";
//$query = "SELECT * FROM accounts WHERE email=$emailSql";
$query = "SELECT * FROM `videoQuiz`.`accounts` WHERE username = '$usernameSql' LIMIT 0 , 30";


$result = mysql_query($query, $conn);
if (! $result)
    die("couldn't query database to authenticate you: ".mysql_error());

/*
$result = mysql_query($query, $conn);
if (! $result)
    die ("couldn't check if email address already present:\n".mysql_error());
*/

$row = mysql_fetch_row($result);
mysql_free_result($result);
$present = $row[0];


if ($present) {
    $emailMsg = "The email address $email is already registered. Please ".
                "choose another one.";

    unset($email);
    require('account_register_form.php');
    exit;
} 

/*
$query = "INSERT INTO `videoQuiz`.`accounts` (
`account_id` ,
`email` ,
`password` ,
`username`
)
VALUES (
'NULL', "$usernameSql", "$emailSql", "$passwordSql")";
*/

//add new account

echo "Here in the action script '$username' '$email' '$password'";



//$query  = "INSERT INTO `videoQuiz`.`quizOwner` (`account_id`, `quiz_id`) VALUES ('1', '5')";

$query = "INSERT INTO `videoQuiz`.`accounts` (`account_id`, `email`, `password`, `username`) VALUES (NULL, '$email', '$password', '$username')";
 mysql_query($query, $conn);


/*
$query = "INSERT INTO 'videoQuiz'.'accounts' (".
 "account_id   , ".
 "username    , ".
 "email        , ".
 "password     , "
") VALUES (".
 "NULL, ".
 "$username, ".
 "$email, ".
 "$password, "
");";
*/


/*
INSERT INTO `videoQuiz`.`accounts` (
`account_id` ,
`email` ,
`password` ,
`username`
)
VALUES (
NULL , 'asdf', 'asdf', 'asdf'
);
*/


/*
$result = mysql_query($query, $conn);
if (! $result)
	die ("sorry, couldn't register you due to a database error: ".mysql_error());

$account_id = mysql_insert_id($conn); //get the id which was assigned to the user
if (! $account_id)
	die ("unknwown problem with database: ".mysql_error());

*/
/*
startAccountSession($account_id);
*/


header("HTTP/1.1 302 Moved Temporarily");
//header("Location: account_home.php?$SID");
?>
