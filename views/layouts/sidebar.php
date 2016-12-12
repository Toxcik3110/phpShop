
    <div class="sidebar">
        <div class="title">
            Категории
        </div>
        <div class="array">
            <?php foreach ($categories as $categoryItem): ?>
                <div class="elemV">
                    <a href="/test/catalog/<?php echo $categoryItem['id']; ?>">
                        <?php echo $categoryItem['name']; ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
