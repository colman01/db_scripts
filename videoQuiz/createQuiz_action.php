<?php
//require_once('session_check.php');
//if (! $SID) require('errorpages/not_logged_in.php');

//require_once('database_scripts/standard_queries.php');
require_once('database_scripts/database.php');
select_database();
//require_once('mmm_datafiles.php');
//$this_month_date  = getFileContent($FILENAME_THIS_MONTH_DATE );
//$next_month_date  = getFileContent($FILENAME_NEXT_MONTH_DATE );


$paramList = array(
 'question'            => 'string',
 'answer1'             => 'string',
 'answer2'             => 'string',
 'answer3'             => 'string',
 'answer4'             => 'string',
 'correctAnswer'       => 'int',
 'feedbackQuestion'    => 'string',
 'feedbackInputAnswer' => 'string',
 'optionQuestion' => 'string',
 'optionAnswer1'       => 'string',
 'optionAnswer2'       => 'string',
 'optionAnswer3'       => 'string',
 'optionAnswer4'       => 'string',
 'optionSelected'         => 'int',
 'rating'          => 'float'
);


//extract parameters to be global variables
foreach ($paramList as $paramName => $paramType) {
	if(!$paramName)
		$paramName = 'NULL';
    eval("\$$paramName = \$_POST['$paramName'];");
}

/*
//mysqlify parameters
foreach ($paramList as $paramName => $paramType) {
    if ($paramType == 'string')
        eval("\$$paramName"."Sql = \"'\".mysql_real_escape_string(\$$paramName).\"'\";");
    else if ($paramType == 'bool')
        eval("\$$paramName"."Sql = isset(\$$paramName) ? 1 : 0;");
    else
        eval("\$$paramName"."Sql = ($paramType)(\$$paramName);");
}


if ($otherMakeCheck ) {
    $make     = $otherMake ;
    $makeSql  = $otherMakeSql ;
}
if ($otherModelCheck) {
    $model    = $otherModel;
    $modelSql = $otherModelSql;
}
if ($otherTypeCheck ) {
    $type     = $otherType ;
    $typeSql  = $otherTypeSql ;
}

*/

//update db with other make, model and type if specified
//$makeId = getMakeId($make);

/*
//make
if ($otherMakeCheck && $makeId == -1) {
    $isNewMake = TRUE;

    $query = "INSERT INTO makes (make_id, name) VALUES (NULL, $makeSql)";
    $result = mysql_query($query, $conn);
    if (! $result)
        die ("datebase error. couldn't insert make $make into ".
             "table of makes: ".mysql_error());

    $makeId = mysql_insert_id($conn);
}
*/

/*
//model
if ($otherModelCheck || $isNewMake) {
    $modelList = getModelNameList($make);

    if (in_array($otherModel, $modelList))
        break;

    $query = "INSERT INTO models (name, make_id) VALUES ($modelSql, $makeId)";

    $result = mysql_query($query, $conn);
    if (! $result) {
        die ("datebase error. couldn't insert model '$model' into ".
             "table of models: ".mysql_error());
    }
}

//type
if ($otherTypeCheck) {
    $typeList = getNameList('types');

    if (in_array($otherType, $typeList))
        break;

    $query = "INSERT INTO types (name) VALUES ($typeSql)";
    $result = mysql_query($query, $conn);

    if (! $result) {
        die ("datebase error. couldn't insert type '$type' into ".
             "table of types: ".mysql_error());
    }
}
*/

//$account_idSql = $_SESSION['account_id'];
$timestampSql  = time();

/*
INSERT INTO `videoQuiz`.`quizData` (`question`, `answer1`, `answer2`, `answer3`, `answer4`, `correctAnswer`, `feedbackQuestion`, `feedbackInputAnswer`, `optionQuestion`, `optionAnswer1`, `optionAnswer2`, `optionAnswer3`, `optionAnswer4`, `optionSelected`, `rating`, `quiz_id`) VALUES ('what color is chocolate', 'brown', 'not brown', 'white', 'black', '1', 'product feedback question', '', 'Your opinion please', 'opinion 1', 'opinion 2', 'opinion 3', 'opinion 4', '', '.2', '3');

$query = "INSERT INTO 'videoQuiz'.'quizData' ("
`question`, `answer1`, `answer2`, `answer3`, `answer4`, `correctAnswer`, `feedbackQuestion`, `feedbackInputAnswer`, `optionQuestion`, `optionAnswer1`, `optionAnswer2`, `optionAnswer3`, `optionAnswer4`, `optionSelected`, `rating`, `quiz_id`) VALUES
('what color is chocolate', 'brown', 'not brown', 'white', 'black', '1', 'product feedback question', '', 'Your opinion please', 'opinion 1', 'opinion 2', 'opinion 3', 'opinion 4', '', '.2', '3');
*/

//$query = "INSERT INTO `videoQuiz`.`accounts` (`account_id`, `email`, `password`, `username`) VALUES (NULL, '$email', '$password', '$username')";

//$result = mysql_query($query, $conn);




$query = "INSERT INTO `videoQuiz`.`quizData` (`question`, `answer1`, `answer2`, `answer3`, `answer4`, `correctAnswer`, `feedbackQuestion`, `optionQuestion`, `optionAnswer1`, `optionAnswer2`, `optionAnswer3`,`optionAnswer4`,`quiz_id`) VALUES ('$question', '$answer1', '$answer2', '$answer3', '$answer4', '$correctAnswer', '$feedbackQuestion', '$optionQuestion', '$optionAnswer1', '$optionAnswer2', '$optionAnswer3', '$optionAnswer4', NULL)";

echo $query;

$result = mysql_query($query, $conn);
if (! $result)
	die ("problem with database. couldn't insert quiz: ".mysql_error());

$quiz_id = mysql_insert_id($conn); //get the id which was assigned to our carad
if (! $quiz_id)
	die ("problem with database. couldn't locate new quiz: ".mysql_error());

//$account = getAccount($_SESSION['account_id']);

$quizLink = "http://{$_SERVER['SERVER_NAME']}/quiz_view.php?quiz_id=$quiz_id";

$to      = 'colman01@gmail.com';
$subject = 'New Quiz Entry';
$message =
"A new quiz has been entered \n".
//($attendsNextMmm ? "$next_month_date\n" : "\n").
//"Owner: {$account['firstname']} {$account['lastname']}\n".
"View Quiz:\n".
"$quizLink\n".
"\n".
"$caption\n".
"Description:\n".
"$description\n"
;
$headers = 'From: carLand' . "\r\n" .
'Reply-To: mrneilbrady@hotmail.com, colman01@gmail.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);


header("HTTP/1.1 302 Moved Temporarily");
//header("Location: carad_view.php?$SID&carad_id=$carad_id");
?>
