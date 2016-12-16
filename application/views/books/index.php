<h2><?php echo $title; ?></h2>

<?php foreach ($books as $news_item): ?>

    <h3><?php echo $news_item['name']; ?></h3>
    <div class="main">
        <?php echo $news_item['author']; ?>
        <?php echo $news_item['price']; ?>
    </div>

<?php endforeach; ?>