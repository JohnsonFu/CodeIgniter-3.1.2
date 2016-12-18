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
                    <li><a href=<?php echo site_url('user/mall') ?>>商城</a></li>
                    <li class="active"><a href="#">购物车</a></li>
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
    <h1 style="font-size:30px;">购物车<br></h1>
    <table class="table table-bordered">
        <tr>
            <th>书名</th>
            <th>作者</th>
            <th>价格</th>
            <th>数量</th>
            <th>撤销</th>
        </tr>
        <?php
        if(isset($_SESSION['cart'])) {
            $totalmoney=0;
        foreach ($_SESSION['cart'] as $item) {
            $totalmoney+=$item['qty']*$item['price'];
        ?>
            <tr>
                <?php echo validation_errors(); ?>
                <?php echo form_open('user/deletebook'); ?>
            <th><?PHP echo $item['name'];?><input type="hidden" name="name" value=<?PHP echo $item['name'];?>></th>
            <th><?PHP echo $item['author'];?></th>
            <th><?PHP echo $item['price'];?></th>
                <th><?PHP echo $item['qty'];?></th>
                <th><button type="submit" class="btn">撤销</button></th>
                </form>
            </tr>
            <?php
        }}
        ?>
    </table>
    <h1 style="font-size:20px;float:right">商品总价为:¥<?php echo $totalmoney?><br></h1>
</div>
