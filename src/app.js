$(document).ready(function () {

    var source = $("#entry-template").html();
    var template = Handlebars.compile(source);


    $.ajax({
        url: 'album.php',
        method: 'GET',
        success: function(reply) {
            console.log('ok');
            for (var i = 0; i < reply.length; i++) {
                var data = reply[i]
                var obj = {
                    poster: data.poster,
                    title: data.title,
                    author: data.author,
                    year: data.year,
                    genre: data.genre
                };
                var html = template(obj);
                $('.wrapper').append(html);
            }

        },
        error: function () {
            alert('orrore');
        }
    });
});
