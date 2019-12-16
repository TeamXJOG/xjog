$(function() { 
    $('#form-komen').submit(function(e) {
        e.preventDefault();
        var route = $('#form-komen').data('route');
        var komen_data = $(this);

        $.ajax({
            type: 'post',
            url: route,
            data: komen_data.serialize(),
            success: function(Response) {
                console.log(Response);
                if(Response.success) {
                    $('#comment_field').val('');
                }
                  
            }
        });      
    });
});