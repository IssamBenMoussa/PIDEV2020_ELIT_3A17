$(document).ready(function () {
    var articles = $('.articles');
    var toSearch = $('#key').val();
    var searchUrl = 'https://en.wikipedia.org/w/api.php';
    var ajaxArticleData = function () {
        $.ajax({
            url: searchUrl,
            dataType: 'jsonp',
            data: {
                //main parameters
                action: 'query',
                format: 'json',

                generator: 'search',
                //parameters for generator
                gsrsearch: toSearch,
                gsrnamespace: 0,
                gsrlimit: 3,

                prop: 'extracts|pageimages',
                //parameters for extracts
                exchars: 300,
                exlimit: 'max',
                explaintext: true,
                exintro: true,

                //parameters for pageimages
                piprop: 'thumbnail',
                pilimit: 'max',
                pithumbsize: 150
            },

            success: function (json) {
                var pages = json.query.pages;
                $.map(pages, function (page) {
                    var pageElement = $('<list-group-item>');
                    //get the article title
                    pageElement.append($('<h2 style="color: red">').append($('<a>').attr('href', 'http://en.wikipedia.org/wiki/' + page.title).text(page.title)));

                    //get the article image (if exists)
                    if (page.thumbnail) pageElement.append($('<img>').attr('width', 150).attr('src', page.thumbnail.source));
                    //get the article text
                    pageElement.append($('<p>').text(page.extract));


                    pageElement.append($('<hr>'));

                    articles.append(pageElement);
                });
            }
        });

    };
    ajaxArticleData();
});