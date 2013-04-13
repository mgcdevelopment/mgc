


	<h1>Login</h1>


<?php echo validation_errors(); ?>

<?php echo form_open('mgc/login'); ?>
<table>
<tr>

<td><h5>Username:</h5></td>
<td><input type="text" name="username" value="" size="50" />
</td>
</tr>
<tr>
<td><h5>Password:</h5></td>
<td><input type="password" name="password" value="" size="50" /></td>
</tr>
<tr>
<td></td>
<td><div><input type="submit" value="Login" /></div></form>
</td>
</tr>
</table>


