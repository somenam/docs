
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

function save() {

    var col = $('#colcord').val();
    jQuery.ajax({
        url: '/docs/update',
        type: "POST",
        dataType: "text",
        data: {id: $("#docid").val(), col: col, text: $('#name').val()},
        success: function (response) {
            $(".cel").removeClass("choce");
            func();
        }
    });
}

$(document).ready(function () {




    var timerId = setInterval(func, 10000);



    $("#name").keydown(function (event) {
        if (event.keyCode == 13) {
            save();
        }
    });

    $(".cel").click(function () {
        var col = $(this);
        $("#name").focus();
        $("#name").val($(this).text());
        $("#colcord").val($(this).attr('data-id'));
        $(".cel").removeClass("choce");
        $(this).addClass("choce");


        $('#name').on('input', function () {
            var msg = $(this).val();
            col.text(msg);
        });
//        $("#name").keypress(function(eventObject) {
//            col.text($("#name").val());
//        //alert('Вы ввели символ с клавиатуры. Его код равен ' + eventObject.which);
//        });
    });

    $("#save").click(function () {
<<<<<<< HEAD
        save();
=======
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
>>>>>>> a99b2a1053ff156ef97ccd240ed2d0c00fea25aa
    });



});


function hook(e) {
  var el = e.srcElement || e.target;
  el.startX = (e.type == 'mousedown') ? 
    (e.clientX - el.offsetWidth) : 0;
}
function move(e) {
  var el = e.srcElement || e.target;
  if(el.startX) 
    el.style.width = e.clientX - el.startX + 'px';
  (e.preventDefault) ? e.preventDefault() : e.returnValue = false;
}
if(!document.attachEvent) {
  document.attachEvent = function(e, f) {
    this.addEventListener(e.substr(2), f, false);
  }
} 
document.attachEvent('onmouseup', hook);
document.attachEvent('onmousemove', move);


