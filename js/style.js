$(document).ready(function() {
    $('.nav.nav-tabs li').hover(function() {
        if (!$(this).hasClass('active')) {
            $(this).find('i').toggleClass('icon-white');
        }
    });
    $('.nav.nav-tabs li').click(function() {
        $(this).find('i').addClass('icon-white');
    });

    $("#save_editable").click(function() {

        var nama = $("#nama").html().split(" ");
        var fnama = nama[0];
        var lnama = nama[1];

        var title = $("#title").html();
        var status = $("#status").html();
        var industry = $("#industry").html();
        var city = $("#city").html();
        var state = $("#state").html();
        var country = $("#country").html();

        var about = $("#content-about").html();
        var looking = $("#content-looking").html();
        var idea = $("#content-idea").html();


        var add1 = "<input type='hidden' name='fnama' value='" + fnama + "' />";
        var add2 = "<input type='hidden' name='lnama' value='" + lnama + "' />";
        var add3 = "<input type='hidden' name='title' value='" + title + "' />";
        var add7 = "<input type='hidden' name='status' value='" + status + "' />";
        var add8 = "<input type='hidden' name='industry' value='" + industry + "' />";
        var add9 = "<input type='hidden' name='city' value='" + city + "' />";
        var add10 = "<input type='hidden' name='state' value='" + state + "' />";
        var add11 = "<input type='hidden' name='country' value='" + country + "' />";

        var add4 = "<input type='hidden' name='about' value='" + about + "' />";
        var add5 = "<input type='hidden' name='looking' value='" + looking + "' />";
        var add6 = "<input type='hidden' name='idea' value='" + idea + "' />";

        $('#form-data').append(add1);
        $('#form-data').append(add2);
        $('#form-data').append(add3);
        $('#form-data').append(add4);
        $('#form-data').append(add5);
        $('#form-data').append(add6);
        $('#form-data').append(add7);
        $('#form-data').append(add8);
        $('#form-data').append(add9);
        $('#form-data').append(add10);
        $('#form-data').append(add11);

        $('#form-data').submit();


    });

    $('#change_picture').click(function() {
        $('#change_picture_form').click();
    });

    $('#change_picture_form').change(function() {
        $('#frm-upload').submit();
    });

    $('#del_pic').click(function() {
        $('#del-upload').submit();
    });
});

