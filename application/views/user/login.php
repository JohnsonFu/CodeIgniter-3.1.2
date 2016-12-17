<?php echo validation_errors(); ?>

<?php echo form_open('user/login'); ?>

<label for="username">用户名</label>
<input type="text" name="username" /><br />

<label for="password">密码</label>
<input type="password"   name="password"/><br>

<input type="submit"  name="submit" value="登录" />

</form>