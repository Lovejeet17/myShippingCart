
<h2>Welcome to the home page.</h2>

<?php if(!empty($products)): ?>

    <div>

        <?php foreach($products as $product): ?>

            <div style="border: 2px dotted; padding: 5px; margin: 5px">
                <div>
                    <?= $product->name; ?>
                    <span style="margin-left: 50px;">
                        <b>Price: <?= $product->price; ?></b>
                    </span>

                    <a href="" class="addToCart" id="<?= $product->id; ?>">Delete</a>

                </div>
            </div>

        <?php endforeach; ?>

    </div>

<?php endif; ?>