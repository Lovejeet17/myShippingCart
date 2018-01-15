<html>

    <head>
    </head>

    <body>
        <div>
            Create New Product.
        </div>

        <div>
            <form action="<?php echo URL::to('admin/product/create'); ?>" method="post">
                <label>Product: </label>
                <input type="text" name="prod_name"/></br>
                <label>Price: </label>
                <input type="number" name="prod_price"/></br>
                <button type="submit">Create</button>
                <button type="reset">Reset</button>
            </form>
        </div>

        <div>
            <?php if(isset($msg)): echo $msg; endif;?>
        </div>
    </body>

</html>

