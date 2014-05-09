<?php

require_once('database_scripts/standard_queries.php');

$title = "CarLand - Manage Pictures";

?>


<font size="3">Manage Pictures for Car Ad</font><br />
&nbsp;<br />

<table cellspacing="0" cellpadding="0" border="0" width="100%"><tr>
<td width="100%" valign="top">


Upload Picture:<br />
<form enctype="multipart/form-data" action="picture_upload_action.php" method="post">
  <input type="hidden" name="<?=session_name()?>" value="<?=session_id()?>"/>
  <input type="hidden" name="carad_id" value="<?=$carad_id?>"/>
  <input type="hidden" name="MAX_FILE_SIZE" value="52428800" />
  <input type="file" name="pictureFile" /><br />
  <input type="submit" value="upload" />
</form>

</td>
<td valign="top" nowrap>
  <b>Make:</b> <?=$carad['make']?><br />
  <b>Model:</b> <?=$carad['model']?><br />
  <b>Type:</b> <?=$carad['type']?><br />
  <b>Colour:</b> <?=$carad['colour']?><br />
  <b>Fuel Type:</b> <?=$carad['fuel']?><br />
  <b>Transmission:</b> <?=$carad['transm']?><br />
</td>
</tr></table>

<br /><center>
<form  action="carad_view.php" method="get">
  <input type="hidden" name="<?=session_name()?>" value="<?=session_id()?>"/>
  <input type="hidden" name="carad_id" value="<?=$carad_id?>"/>
  <input type="submit" value="Finish" />
</form>
</center>


