(function ($) {

    $(".addToCart").on("click", function (e) {

        e.preventDefault();

        var action = $(this).attr('href');
        var prod_id = $(this).data('id');

        console.log(action+" "+prod_id);

        $.ajax({
            type    : 'POST',
            url     : action,
            data    : {id : prod_id}
        })

    });

})(jQuery);