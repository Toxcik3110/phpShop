<?php include ROOT.'./views/layouts/header.php' ?>
        <div class="wrapper">
            <?php include ROOT.'./views/layouts/sidebar.php' ?>
            <div class="content">
                <div class="title">
                    Content
                </div>
                <div class="array">
                    <?php foreach ($categoryProducts as $product): ?>
                        <div class="elemC">
                            <div class="subTitle">
                                <?php echo $product['name'] ?>
                            </div>
                            <a href="/test/product/<?php echo $product['id']; ?>"><?php echo $product['price']; ?>$</a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- <div class="pagination">

                </div> -->
                <?php echo $pagination->get(); ?>
            </div>
            <div class="clearfix"></div>



        </div>
<?php include ROOT.'./views/layouts/footer.php' ?>
