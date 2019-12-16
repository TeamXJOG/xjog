// $(document).ready(function() { 
//     // console.log('hahahaha');
//     $('#like').change(function(e) {
//                 console.log('masuk ');
//                 // var el = $(this);
//     if($(this).is(":checked")) {
//         $('#form-like').trigger('submit'); 
//         $('#form-like').on("submit", function(ev) {
//         ev.preventDefault();
//         console.log('masuk');
//         // var form = $(this);
//         // var url = form.attr('action');
//         var route = $('#form-like').data('route');
//         var komen_like = $(this);
            
//         $.ajax({
//             type: 'post',
//             url: route,
//             data: komen_like.serialize(),
//             success: function(Response) {
//                 console.log(Response);
//                             // if(Response.success) {
//                             //     $('#comment_field').val('');
//                             // }
                            
//                     }
//                 });
//             });

//         }
//     });
// });



$(document).ready(function() {
    var butt = $('#butt');
    var id1 = butt.data('id_photo');
    console.log(id1);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    console.log('gas');
    $('.like').change(function(e) {
        console.log('masuk ')
        var el = $(this);
        if($(this).is(":checked")) { 
            console.log('kepencet')
        var id = el.data('id');
        console.log(id);    
        $.ajax({
            // type: "POST",
            url: '/likemsg/' +id,
            data: { value: el.value},
            success: function(data) {
                console.log(data);
            }        
        });
        }else {
            console.log('kepencet')
            var id = el.data('id');
            console.log(id);    
            $.ajax({
                // type: "POST",
                url: '/unlikemsg/' +id,
                data: { value: el.value},
                success: function(data) {
                    console.log(data);
                }        
            }); 
        }

        e.preventDefault();
    });
});

