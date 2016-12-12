<?php include ROOT.'./views/layouts/header.php' ?>
        <div class="wrapper">
            <?php include ROOT.'./views/layouts/sidebar.php' ?>
            <div class="content">
                <div class="title">
                    <?php echo $product['name'] ?>
                </div>
                <div class="elemC">
                    Brand:<b><?php echo $product['brand'] ?></b><br>
                    Price:<b>$<?php echo $product['price'] ?></b><br>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
<?php include ROOT.'./views/layouts/footer.php' ?>
