//Related Product

if (window.scroll > $(".section-related-content").offset().top - 250) {
    $(".section-related-content .card-barang").each(function (i) {
        setTimeout(function () {
            $(".section-related-content .card-barang").eq(i).addClass("muncul");
        }, 300 * (i + 1));
    });
}
