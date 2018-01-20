
<h2>Welcome to the home page.</h2>

<?php if(!empty($products)): ?>

    <div>

        <?php if(Session::has('successMsg')): ?>
            <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> <?= Session::get('successMsg'); ?>
            </div>
        <?php elseif(Session::has('errorMsg')): ?>
            <div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <strong>Danger!</strong> <?= Session::get('errorMsg'); ?>
            </div>
        <?php endif; ?>

        <?php foreach($products as $product): ?>

            <div style="border: 2px dotted; padding: 5px; margin: 5px">
                <div>
                    <?= $product->name; ?>
                    <span style="margin-left: 50px;">
                        <b>Price: <?= $product->price; ?></b>
                    </span>

                    <a href="<?php echo URL::to('admin/product/delete/'.$product->id);?>" class="deleteProd" data-id="<?= $product->id; ?>">Delete</a>

                    <button type="button" class="btn btn-info btn-sm prodEdit" data-id="<?= $product->id; ?>" data-prod-name="<?= $product->name; ?>"
                            data-prod-price="<?= $product->price; ?>" data-toggle="modal">Edit Product</button>
                </div>
            </div>

        <?php endforeach; ?>

        <?= View::make('Model.productCrudModels', ['data' => $products]); ?>

    </div>

<?php endif; ?>
