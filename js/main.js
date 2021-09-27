$(function () {
    $("#txtFrom").datepicker({
        numberOfMonths: 1,
        dateFormat: 'M dd, yy',
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() + 1);
            $("#txtTo").datepicker("option", "minDate", dt);
        }
    });
    $("#txtTo").datepicker({
        numberOfMonths: 1,
        dateFormat: 'M dd, yy',
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() - 1);
            $("#txtFrom").datepicker("option", "maxDate", dt);
        }
    });
});
$(window).scroll(function () {
    if ($(window).scrollTop() > 120) {
        $(".header").addClass('header_active');


    } else {
        $(".header").removeClass('header_active');
    }
});
