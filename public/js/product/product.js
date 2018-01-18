(function ($) {
    
    $(".prodEdit").on("click", function () {
        var prod_id = $(this).data("id");
        var prod_name = $(this).data("prod-name");
        var prod_price = $(this).data("prod-price");

        document.getElementById("prod_id").value = prod_id;
        document.getElementById("prod_name").value = prod_name;
        document.getElementById("prod_price").value = prod_price;
        $("#editProduct").modal();
    });

})(jQuery);