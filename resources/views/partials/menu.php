<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?= URL::to('home'); ?>">MyShippingCart</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="<?= URL::to('home'); ?>">Home</a></li>
            <li><a href="<?= URL::to('home'); ?>">Products</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?= URL::to('signup'); ?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <?php if(session()->has('email')): ?>
                <li><a href="<?= URL::to('user/logout'); ?>"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
            <?php else: ?>
                <li><a href="<?= URL::to('login'); ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>