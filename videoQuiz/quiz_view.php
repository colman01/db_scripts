<?php
//require_once('session_check.php');

require_once('database_scripts/standard_queries.php');

$quiz_id = (int)($_GET['quiz_id']);
//$pic      = (int)($_GET['pic'     ]);

$quiz   = getQuiz($quiz_id);
//$picList = $carad['picList'];
//$account = getAccount($carad['account_id']);

//$isOwnCarad = $SID ? $_SESSION['account_id'] == $carad['account_id'] : FALSE;

//$account['email']     = getJavaScriptEmailHiding($account['email']);
//$carad  ['timestamp'] = getTimeDateString       ($carad  ['timestamp']);

//htmlify data (make it ready to be put into an html page)
$htmlConvItems_carad = array(
 'question',
 'answer1',
 'answer2',
 'answer3',
 'answer4',
 'correctAnswer'
);

$htmlConvItems_account = array(
 'username',
 'email',
 'city'
);

foreach ($htmlConvItems_carad as $item)
    $carad[$item] = htmlentities($carad[$item]);

foreach ($htmlConvItems_account as $item)
    $account[$item] = htmlentities($account[$item]);

$title = "Quiz Text Summary";
require('layout/pagebegin.php');
?>


<font size="3"><?=$carad['caption']?></font><br />
&nbsp;<br />

<table border="0"><tr>
<td valign="top">
  <b>Question:</b> <?=$quiz['question']?><br />
  <b>answer1:</b> <?=$quiz['answer1']?><br />
  <b>answer2:</b> <?=$quiz['answer2']?><br />
  <b>answer3:</b> <?=$quiz['answer3']?><br />
  <b>answer4:</b> <?=$quiz['answer4']?><br />
  <!-- b>Price:</b> <span class="head">&euro;<?=$carad['price']?></span><br / -->
  <b>correctAnswer:</b> <?=$quiz['correctAnswer']?><br />
  <b>feedbackQuestion:</b> <?=$quiz['feedbackInputAnswer']?><br />
  <b>optionQuestion:</b> <?=$quiz['optionQuestion']?><br />
  <!-- b>Nct:</b> Year: <?=$carad['nct_year']?>&nbsp; Month:<?=$carad['nct_month']?><br / -->
  <b>optionAnswer1:</b> <?=$quiz['optionAnswer1']?><br />
  <b>optionAnswer2:</b> <?=$quiz['optionAnswer2']?><br />
  <b>optionAnswer3</b> <?=$quiz['optionAnswer3']?><br />
  <b>optionAnswer4:</b> <?=$quiz['optionAnswer4']?><br />
  <b>optionSelected:</b> <?=$quiz['optionSelected']?><br />
  <b>Rating:</b> <?=$quiz['rating']?><br />
  <b>Date Entered:</b> <?=$quiz['timestamp']?><br />
</td>
<!-- td valign="top">&nbsp;</td>
< td valign="top">
  <b>Contact:</b><br />
  <?php if ($account['phone']) { ?> Phone: <?=$account['phone']?><br /> <?php } ?>
  <?php if ($account['isEmailPublic']) echo "Email: ".$account['email']; ?><br />
</td >
<td -->
<form method="get" action="picture_manager.php" style="margin: 0;">
        <input type="hidden" name="<?=session_name()?>" value="<?=session_id()?>" />
        <input type="hidden" name="carad_id" value="<?=$carad_id?>" />
        <input type="submit" value="Upload Pictures" />
      </form>
      <form method="post" action="carad_edit_form.php" style="margin: 0;">
        <input type="hidden" name="<?=session_name()?>" value="<?=session_id()?>" />
        <input type="hidden" name="carad_id" value="<?=$carad_id?>" />
        <input type="submit" value="Edit Details" />
      </form>
      <form method="get" action="carad_remove_form.php" style="margin: 0;">
        <input type="hidden" name="<?=session_name()?>" value="<?=session_id()?>" />
        <input type="hidden" name="carad_id" value="<?=$carad_id?>" />
        <input type="submit" value="Remove" />
      </form>

<form method="get" action="quiz_manager.php" style="margin: 0;">
        <!-- input type="hidden" name="<?=session_name()?>" value="<?=session_id()?>" / -->
        < input type="hidden" name="quiz_id" value="<?=$quiz_id?>" / -->
        <input type="submit" value="Upload Quiz" />
      </form>
      <form method="post" action="quiz_edit_form.php" style="margin: 0;">
        <!-- input type="hidden" name="<?=session_name()?>" value="<?=session_id()?>" / -->
        <input type="hidden" name="quiz_id" value="<?=$quiz_id?>" />
        <input type="submit" value="Edit Details" />
      </form>
      <form method="get" action="quiz_remove_form.php" style="margin: 0;">
        <!-- input type="hidden" name="<?=session_name()?>" value="<?=session_id()?>" / -->
        <input type="hidden" name="quiz_id" value="<?=$quiz_id?>" />
        <input type="submit" value="Remove" />
      </form>
</td>
</tr></table>
&nbsp;<br />
