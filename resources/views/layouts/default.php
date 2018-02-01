<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" type="text/css">

    <script src="<?php echo asset("css/store.css"); ?>" type="text/css"></script>

</head>

<body>

<div id="wrapper">

    <div class="col-lg-12">
        <?php if(session()->has('email')): ?>
            <a href="<?= URL::to('user/logout'); ?>" class="log-button btn btn-primary pull-right">Log Out</a>
        <?php else: ?>
            <a href="<?= URL::to('login'); ?>" class="log-button btn btn-primary pull-right">Log In</a>
        <?php endif; ?>
    </div>

    <?php echo isset($content) ? $content : ''; ?>

    <script src="<?php echo asset("js/product/product.js"); ?>" type="text/javascript"></script>

</div>

</body>

</html>