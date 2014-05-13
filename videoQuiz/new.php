<?php
header("Pragma: no-cache");

//require_once('session_check.php');
//if (! $SID) require('errorpages/need_to_register.php');

$paramList = array(
 'question'              => 'string',
 'answer1'               => 'string',
 'answer2'               => 'string',
 'answer3'               => 'string',
 'answer4'               => 'string',
 'correctAnswer'         => 'int',
 'feedbackQuestion'      => 'string',
 'feedbackInputAnswer'   => 'string',
 'optionQuestion'        => 'string',
 'optionAnswer1'         => 'string',
 'optionAnswer2'         => 'string',
 'optionAnswer3'         => 'string',
 'optionAnswer4'         => 'string',
 'optionSelected'        => 'int',
 'rating'                => 'float'
);

//extract parameters to be global variables
//foreach ($paramList as $paramName => $paramType)
//    eval("\$$paramName = \$_POST['$paramName'];");


//require_once('database_scripts/standard_queries.php');
/*$makeList  = getNameList('makes');

if (! $make) $make = $makeList[0];
$modelList = getModelNameList($make);

if (! $model || ! in_array($model, $modelList))
    $model = $modelList[0];

$typeList  = getNameList('types');
$fuelList  = getNameList('fuels');


require_once('mmm_datafiles.php');
$date_thism = getFileContent($FILENAME_THIS_MONTH_DATE);
$date_nextm = getFileContent($FILENAME_NEXT_MONTH_DATE);

$this_month_glink = getFileContent($FILENAME_THIS_MONTH_GLINK);

$next_month_glink = getFileContent($FILENAME_NEXT_MONTH_GLINK);
*/


$title = "Create Quiz";
//require('layout/pagebegin.php');
?>

<center>
<form action="createQuiz_action.php" method="post" >
  <!-- input type="hidden" name="<?=session_name()?>" value="<?=session_id()?>" / -->

  <table border="0" class="copy">


<tr>
<td align="left" colspan="3">
THIS Month's motor market takes place <?= $date_thism ?> and will
be held <a href="<?= $this_month_glink ?>">here</a>.<br />
</td>
</tr>

<tr>
    <td align="left" colspan="3">
        NEXT Month's motor market takes place <?= $date_nextm ?> and will
        be held <a href="<?= $next_month_glink ?>">here</a>.<br />
    </td>
</tr>
    <tr>
        <td colspan="3">
	Take Part in Motor Market <?= $date_thism ?>
        <input name="attendsThisMmm" type="checkbox" <?=$attendsThisMmm ? 'checked' : ''?>/>
      </td>
    </tr>
    <tr>
      <td align="left" colspan="3">
	Take Part in Motor Market <?= $date_nextm ?>
        <input name="attendsNextMmm" type="checkbox" <?=$attendsNextMmm ? 'checked' : ''?>/>
      </td>
    </tr>

    <tr>
      <td colspan="3" align="center">
        <input type="submit" value="Enter Advert" />
      </td>
    </tr>
  </table>

</form>
</center>
