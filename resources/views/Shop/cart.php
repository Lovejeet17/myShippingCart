
<h2>Welcome to the cart page.</h2>

<?php if(!empty($products && $user)): ?>

    <div>

        <?php foreach($products as $product): ?>

            <div style="border: 2px dotted; padding: 5px; margin: 5px">
                <div>
                    <?= $product->name; ?>
                    <span style="margin-left: 50px;">
                        <b>Qty: <?= $product->qty; ?></b>
                    </span>

                </div>
            </div>

        <?php endforeach; ?>

    </div>

<?php endif; ?>
