<!DOCTYPE html>
<html>
<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" type="text/css">

</head>

<body>

<div id="wrapper">

    <?php echo isset($content) ? $content : ''; ?>

    <script src="<?php echo secure_asset("public/js/product/product.js"); ?>" type="text/javascript"></script>

</div>

</body>

</html>