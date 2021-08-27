/** Simple (ugly code to handle the comment vote up/down) */

var container = $('.vote-arrows');
container.find('a').on('click',function(e){
    e.preventDefault();
    var link = $(e.currentTarget);

    $.ajax({
        url: 'comments/10/vote/' + link.data('direction'),
        methond: 'POST'
    }).then(function(data){
        container.find('.js-vote-total').text(data.votes);
    })



})

