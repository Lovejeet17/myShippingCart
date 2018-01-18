<!-- Edit Product -->
<div class="modal fade" id="editProduct" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo URL::to('admin/product/edit');?>">
                    <div class="form-group">
                        <label for="prod_name">Product Name:</label>
                        <input type="text" class="form-control" id="prod_name" name="prod_name">
                        <label for="price">Price:</label>
                        <input type="text" class="form-control" id="prod_price" name="prod_price">
                        <input type="hidden" id="prod_id" name="prod_id" value="">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>