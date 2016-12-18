<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">Project name</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active"><a href="#">商城</a></li>
                    <li><a href="#">购物车</a></li>
                    <li><a href="#contact">退出登录</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
<br>
<br>
<br>
<div class="container">
    <h1 style="font-size: 30px;">ShopCart<br></h1>
    <table class="table table-bordered">
        <tr>
            <th>书名</th>
            <th>作者</th>
            <th>价格</th>
        </tr>
        <?php
        if(isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
        ?>
            <tr>
            <th><?PHP echo $item['name'];?></th>
            <th><?PHP echo $item['author'];?></th>
            <th><?PHP echo $item['price'];?></th>
            </tr>
            <?php
        }}
        ?>
    </table>

</div>
