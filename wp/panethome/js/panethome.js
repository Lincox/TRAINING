$(document).ready(function() {
    $('#showmenu').click(function() {
            $('#menu').slideToggle("slide");
    });

    $('.close').click(function() {
        $('#menu').slideToggle("slide");
    });

    $('#showmenu1').click(function() {
        $('#menu1').slideToggle("slide");
        $('#showmenu1').text("閉じる");
    });
});