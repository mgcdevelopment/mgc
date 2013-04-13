
<?php echo validation_errors(); ?>
    <form action="<?php echo base_url('index.php/mgc/register');?>" method="post" id="user" >

<table>
<tr>
<td><h2>User Registration</h2></td>
<td></td>
</tr>
<tr>
<td><h5>Username</h5></td>
<td><input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" /></td>
</tr>
<tr>
<td><h5>Password</h5></td>
<td><input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" /></td>
</tr>
<tr>
<td>
<h5>Password Confirm</h5></td><td>
<input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" /></td>
</tr>
<tr>
<td><h5>Email Address</h5></td><td>
<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" /></td>
</tr>
<tr>
<td></td>
<td><?php
					   $error='';
                       $publickey = "6LfXvd8SAAAAAHg6gCVOUm74dhY2aWbn9V0lZAM2";

 echo    $this->recaptcharesponse->recaptcha_get_html($publickey, $error);

?></td>
</tr>
<tr>
<td></td>
<td>  <div align='left'>             <input type='submit' value='submit' />
    </div></form> </td>
</tr>
</table>

