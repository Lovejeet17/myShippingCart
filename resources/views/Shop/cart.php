
<h2>Welcome to the cart page.</h2>

<?php if(!empty($products && $user)): ?>

    <div>


        <table class="table table-hover">
            <tbody>

            <?php foreach($products as $product): ?>

                <tr>
                    <td><?= $product->name; ?></td>
                    <td><label>Qty: </label> <input type="number" class="form-control col-xs-2 prod-qty-in-cart" value="<?= $product->qty; ?>"></td>
                    <td><a href="<?= URL::to('product/remove/'. $user->id); ?>" class="removeFromCart btn-danger" data-id="<?= $product->id; ?>">Remove</a></td>
                </tr>

            <?php endforeach; ?>

            </tbody>
        </table>

    </div>

<?php endif; ?>
