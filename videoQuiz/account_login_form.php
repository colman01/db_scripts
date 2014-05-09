<?php

$title = "CarLand - Login To Your Account";
?>


<font size="3"><b>Login to Your Account</b></font>

<br />&nbsp;

<p>
<form action="account_login_action.php" method="post" >
<table>
  <tr>
    <td align="right" width="0">Username:</td>
    <td><input name="username" type="text" value="<?=$username?>" /></td>
    <td><font color="red"><?=$usernameMsg?></font></td>
  </tr>

  <tr>
    <td align="right">Password:</td>
    <td><input name="password" type="password" /></td>
    <td><font color="red"><?=$passwordMsg?></font></td>
  </tr>

  <tr>
    <td colspan="2" align="center">
      <input name="Login" type="submit" value="Login" />
    </td>
  </tr>
</table>
</form>
</p>

