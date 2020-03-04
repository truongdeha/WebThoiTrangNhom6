$(document).ready(function(){
    load_data();
    function load_data() {
        $.ajax({
            url:"ajaxAction.php",
            method:"post",
            success:function(result) {
                $('#result').html(result);
            }
        });
    }
    $(document).on('click','.btnDelete',function () {
        var id = $(this).attr("data-delete");
        $.ajax({
            url:"ajaxAction.php",
            method:"post",
            data:{idDel:id},
            success:function() {
                load_data();
            }
        });
    });
});