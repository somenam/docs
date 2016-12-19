$(document).ready(function () {

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
        //alert('save');
        var col = $('#colcord').val();
        jQuery.ajax({
            url: '/docs/update', //Адрес подгружаемой страницы
            type: "POST", //Тип запроса
            dataType: "text", //Тип данных
            data: {id: $("#docid").val(), col: col, text: $('#name').val()},
            success: function (response) { //Если все нормально
                $(".cel").removeClass("choce");
                location.reload();
            }
        });
    });


    $("#reload").click(function () {
        location.reload();
    });
});


