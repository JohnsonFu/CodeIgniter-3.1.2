<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">当当网</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active"><a href="#">商城</a></li>
                    <li><a href=<?php echo site_url('user/showcart')?>>购物车</a></li>
                    <li><a href=<?php echo site_url('user/logout')?>>退出登录</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
<br>
<br>
<br>
<div class="container">
<h1 style="font-size: 25px;">欢迎光临当当,<?PHP echo $_SESSION['info']['userinfo']['username'] ?><br></h1>
    <table class="table table-bordered">
        <tr>
            <th>书名</th>
            <th>作者</th>
            <th>价格</th>
            <th>加入购物车</th>
        </tr>
        <?php
        foreach( $_SESSION['info']['booklist'] as $book){
        ?>
            <?php echo validation_errors(); ?>
            <?php echo form_open('user/selectbook'); ?>
            <tr>
            <th><?PHP echo $book['name'];?><input type="hidden" name="name" value=<?PHP echo $book['name'];?>></th>
            <th><?PHP echo $book['author'];?><input type="hidden" name="author" value=<?PHP echo $book['author'];?>></th>
            <th><?PHP echo $book['price'];?><input type="hidden" name="price" value=<?PHP echo $book['price'];?>></th>
                <th><button type="submit" class="btn">加入</button></th>
            </tr>
            </form>
            <?php
        }
        ?>
    </table>

</div>