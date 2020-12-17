$(document).ready(function () {

    var source = $("#entry-template").html();
    var template = Handlebars.compile(source);

    var sourceopt = $("#options").html();
    var templateopt = Handlebars.compile(sourceopt);
    var genres = [];
    $.ajax({
        url: 'album.php',
        method: 'GET',
        success: function(reply) {
            for (var i = 0; i < reply.length; i++) {
                var data = reply[i];
                if (!genres.includes(data.genre)) {
                    genres.push(data.genre);
                    var opt = {
                        value: data.genre,
                    };
                    var selects = templateopt(opt);
                    $('#kind').append(selects);
                };
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

    $('#kind').change(function() {
        var valuex = $('select')[0].value;
        console.log(valuex);
        if (valuex != 'all') {
            $('.wrapper').empty();
            $.ajax({
                url: 'album.php',
                data: {genre: valuex},
                method: 'GET',
                success: function(data) {
                    console.log(data);
                    for (var i = 0; i < data.length; i++) {
                        var data2 = data[i];
                        var obj = {
                            poster: data2.poster,
                            title: data2.title,
                            author: data2.author,
                            year: data2.year,
                            genre: data2.genre
                        };
                        var html = template(obj);
                        $('.wrapper').append(html);
                    }
                },
                error: function () {
                    alert('orrore');
                }
            });

        }
    });


});
