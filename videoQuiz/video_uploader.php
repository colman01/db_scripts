<?php

//header('Pragma: no-cache');

//require_once('session_check.php');
//if (! $SID) require('errorpages/not_logged_in.php');

//$carad_id = (int)($_GET['carad_id']);

//require_once('database_scripts/standard_queries.php');
//$carad = getCarad($carad_id);
//$picList = $carad['picList'];

//if user tries to modify the pictures of a carad which is not his own
//if ($carad['account_id'] != $_SESSION['account_id'])
//    require('errorpages/denied.php');



//foreach ($htmlConvItems_carad as $item) {
//    eval("\$carad['$item'] = htmlentities(\$carad['$item']);");
//}


$title = "Manage Videos";
//require('layout/pagebegin.php');
?>


<font size="3">Manage Videos for Quiz</font><br />
&nbsp;<br />

<form action="video_upload_action.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file1" id="file"><br>

<input type="file" name="file2" id="file"><br>
<input type="file" name="file3" id="file"><br>
<input type="file" name="file4" id="file"><br>
<input type="file" name="file5" id="file"><br>

<input type="submit" name="submit" value="Submit">
</form> 

<table cellspacing="0" cellpadding="0" border="0" width="100%"><tr>
<td width="100%" valign="top">

<?php
for ($i = 0; $i < count($picList); $i++) { $picture = $picList[$i]; ?>
    <form action="video_remove_action.php" method="post">
      <a href="video_view.php?<?=$SID?>&quiz_id=<?=$quiz_id?>&video=<?=$i?>#vids">
        <!-- img src="carad_pics/<?=$picture?>_thumb.jpg" width="140" height="105" border="0" align="middle" /--></a>
      &nbsp;&nbsp;&nbsp;
      <input type="hidden" name="<?=session_name()?>" value="<?=session_id()?>"/>
      <input type="hidden" name="quiz_id" value="<?=$quiz_id?>"/>
      <input type="hidden" name="video" value="<?=$video?>"/>
      <input type="submit" value="remove" />
    </form>
    &nbsp;<br />
    &nbsp;<br />
<?php } ?>

Upload Videos:<br /><br />
<form enctype="multipart/form-data" action="video_upload_action.php" method="post">
  <!-- input type="hidden" name="<?=session_name()?>" value="<?=session_id()?>"/ -->
  <input type="hidden" name="session_name" value="session_id>"/>
  <input type="hidden" name="video_id" value="<?=$video_id?>"/>
  <input type="hidden" name="MAX_FILE_SIZE" value="524288000000" />
  <label for="file">Files:</label>  <br />
  <input type="file" name="videoFile1" />
  <br />

  <input type="submit" value="upload" />
</form >

</td>

</tr></table>

<br /><center>
<form  action="video_view.php" method="get">
  <input type="hidden" name="<?=session_name()?>" value="<?=session_id()?>"/>
  <input type="hidden" name="video_id" value="<?=$video_id?>"/>
  <input type="submit" value="Finish" />
</form>
</center>


<!-- ?php require('layout/pageend.php'); ? -->
