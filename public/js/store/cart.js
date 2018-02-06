(function ($) {

    $(".addToCart").on("click", function (e) {

        e.preventDefault();

        var action = $(this).attr('href');
        var prod_id = $(this).data('id');

        $.ajax({
            type    : 'POST',
            url     : action,
            data    : {id : prod_id},
            success : function () {
                toastr.success('product successfully added to cart.');
            }
        });

    });

})(jQuery);