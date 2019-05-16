$(document).ready(function () {

    $("#formx").submit(function () {
        $.ajax({
            url: "/php/send.php",
            type: "POST",
            data: $("#formx").serialize(),
            success: function (data) {
                $("#textI").val("");
                $("#textI").focus();
                $("#resmess").html(data);
                $('#resmess').scrollTop(999999);
            }
        });
        event.preventDefault();
    });

/*
    $("#subI1").click(function () {
        setTimeout($('#resmess').scrollTop(999999),1000);
    });*/
    /*

        $("#formx2").submit(function () {
            $.ajax({
                url: "/php/receive.php",
                type: "POST",
                data: $("#formx2").serialize(),
                success: function (data) {
                    $(".receive").html(data);
                }
            });
            event.preventDefault();
        });
    */

    /*
            function ajax_main() {
                $.ajax({
                    url: "/php/receive.php",
                    type: "POST",
                    data: $("#formx2").serialize(),
                    success: function (data) {
                        $(".receive").html(data);

                    }
                });

            }
            setInterval(ajax_main, 800);
    */
    $("#formxM").submit(function () {
        $.ajax({
            url: "/php/mail.php",
            type: "POST",
            data: $("#formxM").serialize(),
            success: function (data) {
                $("#theamI").val("");
                $("#MessI").val("");
                $("#resformM").html(data);
            }
        });
        event.preventDefault();
    });


});





