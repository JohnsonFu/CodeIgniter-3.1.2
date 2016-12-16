<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('books/create'); ?>

<label for="name">书名</label>
<input type="text" name="name" /><br />

<label for="author">作者</label>
<input type="text" name="author"/><br />
<label for="price">价格</label>
<input type="text" name="price"/><br />

<input type="submit" name="submit" value="Create book item" />

</form>