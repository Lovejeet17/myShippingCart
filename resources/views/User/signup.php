<form class="form-horizontal" action="<?= URL::to('user/signup'); ?>" method="post">
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Name:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="user_name" placeholder="Enter name">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="user_email" placeholder="Enter email">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Password:</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="user_pwd" placeholder="Enter password">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="user_confirm_pwd" placeholder="Enter password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>
</form>