$(document).ready(function(){
    $('.js-click:first').on('click', function(){
        $.ajax({
            url: "server.php",
            /*type: 'post',*/
            dataType: 'json'
        })
        .done(function(response) {
            console.info(response);
            $('.js-block:first').css('backgroundColor', '#' + response.color);
        })
        .fail(function(response){
            console.info('Error');
            console.info(response);
            alert("Error");
        });
        return false;
    });
});