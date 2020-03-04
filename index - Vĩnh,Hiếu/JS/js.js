
$(document).ready(function () {
    $(".my-btn").click(function () {
        // change active
        $(".my-btn").removeClass("active")
        $(this).addClass("active")
    })
});
$(document).ready(function () {
    var total = 1;
        $(".minus").click(function () {
            total = total - 1;
            $('.value').text(total);
        })
        $(".plus").click(function () {
            total = total + 1;
            $('.value').text(total);
        })
})