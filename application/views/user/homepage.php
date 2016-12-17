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
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">返回</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
<br>
<br>
<br>
<div class="container">
<h1 style="font-size: 25px;">Welcome,<?PHP echo $_SESSION['info']['userinfo']['username'] ?><br></h1>
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
    <?php
    foreach( $_SESSION['cart'] as $item){
        echo $item['name'];
        echo "<br>";
    }
    ?>

</div>