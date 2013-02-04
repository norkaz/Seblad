function clicked(page) { //refer user to this page
    $.ajax({
        url: 'http://facegram.uphero.com/' + page,
        async: true,
        cache: true,
        success: function (response) {
            $('#content').html(response);
        }
    });
}

$("img.lazy").lazyload();
$("img.lazy").show().lazyload();