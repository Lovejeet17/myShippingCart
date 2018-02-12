<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" type="text/css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script src="<?php echo asset("css/store.css"); ?>" type="text/css"></script>

    <script src="hhttps://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" type="text/css"></script>

</head>

<body>

<div id="wrapper">

    <?php $user_id = isset($user)  ? $user->id : '' ?>

    <?= \View::make('partials.menu', ['user_id' => $user_id])->render(); ?>

    <?php echo isset($content) ? $content : ''; ?>

    <script src="<?php echo asset("js/store/product.js"); ?>" type="text/javascript"></script>

    <script src="<?php echo asset("js/store/cart.js"); ?>" type="text/javascript"></script>

</div>

</body>

</html>