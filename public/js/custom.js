/**
 * Created by mirage on 8/31/16.
 */

$('#side-menu').find('ul li a').click(function () {
    $('#side-menu').find('ul li').removeClass('active');
    $(this).closest('li').addClass('active');
    get_response_part($(this).text());
});

function get_response_part(menu_value) {
    $.get('ajax_part.php/?item=' + encodeURIComponent(menu_value), function (data) {
        $('#ajax-container').html(data);
    });
}


$( document ).ready(function() {
    $('#side-menu').find('ul li' ).first().find('a').click();
});
