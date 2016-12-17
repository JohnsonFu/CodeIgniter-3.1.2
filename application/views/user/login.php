<?php echo validation_errors(); ?>

<?php echo form_open('user/login'); ?>

<label for="username">用户名</label>
<input type="text" class="input-small" name="username" /><br />

<label for="password">密码</label>
<input type="password"  class="input-small"  name="password"/><br>

<input type="submit" class="btn"  name="submit" value="登录" />

</form>