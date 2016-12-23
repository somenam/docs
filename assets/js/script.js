
function func() {
    jQuery.ajax({
        //url: '/docs/reload',
        url: $("#url").text()+'docs/reload',
        type: "POST",
        dataType: "text",
        data: {id: $("#docid").val()},
        success: function (response) {
            var cols = {};
            cols = JSON.parse(response);
            for (var i = 0; i < cols.length; i++) {
                var cell = cols[i].row + ',' + cols[i].column;
                $('[data-id = "' + cell + '"]').text(cols[i].value);
            }
        }
    });
}

$(document).ready(function () {




    var timerId = setInterval(func, 10000);



    $("#form_id").keydown(function (event) {
        if (event.keyCode == 13) {
            event.preventDefault();
            return false;
        }
    });

    $(".cel").click(function () {
        var col = $(this);
        $("#name").focus();
        $("#name").val($(this).text());
        $("#colcord").val($(this).attr('data-id'));
        $(".cel").removeClass("choce");
        $(this).addClass("choce");
//        $("#name").keypress(function(eventObject) {
//            col.text($("#name").val());
//        //alert('Вы ввели символ с клавиатуры. Его код равен ' + eventObject.which);
//        });
    });

    $("#save").click(function () {
        var col = $('#colcord').val();
        jQuery.ajax({
            //url: '/docs/update',
            url: $("#url").text()+'docs/update',
            type: "POST",
            dataType: "text",
            data: {id: $("#docid").val(), col: col, text: $('#name').val()},
            success: function (response) {
                $(".cel").removeClass("choce");
                func();
            }
        });
    });



});


